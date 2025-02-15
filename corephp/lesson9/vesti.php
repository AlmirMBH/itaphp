<?php
require_once("funkcije.php");
require_once("klase/classBaza.php");
require_once("klase/classVest.php");
$db=new Baza();
if(!$db->connect())exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vesti</title>
</head>
<body>
    <h2>Moj Blic</h2>
    <form action="vesti.php" method="post">
        <input type="text" name="termin" placeholder='Unesite termin pretrage'> <button>Pretrazi</button>
    </form>
    <?php
    meni($db);
    $upit="SELECT * FROM vesti WHERE obrisan=0";
    if(isset($_GET['id']))$upit="SELECT * FROM vesti WHERE obrisan=0 AND id=".$_GET['id'];
    if(isset($_GET['kategorija']))$upit="SELECT * FROM vesti WHERE obrisan=0 AND kategorija='".$_GET['kategorija']."'";
    if(isset($_GET['autor']))$upit="SELECT * FROM vesti WHERE obrisan=0 AND autor='".$_GET['autor']."'";
    if(isset($_POST['termin']))$upit="SELECT * FROM vesti WHERE obrisan=0 AND (naslov LIKE ('%".$_POST['termin']."%') OR tekst LIKE ('%".$_POST['termin']."%'))";
    $rez=$db->query($upit);
    if($db->error())
    {
        echo "Greska prilikom izvrsavanja upita!!!!<br>";
        echo $db->error()." (".$db->errno().")";
        exit();
    }
    echo "Broj vesti: ".$db->num_rows($rez)."<hr>";
    $vesti= array();
    while($red=$db->fetch_object($rez))
        $vesti[]=new Vest($red->id, $red->naslov, $red->tekst, $red->vreme, $red->autor, $red->kategorija, $red->obrisan, $red->izmena);
    foreach($vesti as $vest)
    {
        echo "<div style='border: 1px solid black; width:300px;margin:2px;padding:2px'>";
        echo $vest->kategorija();
        echo $vest->naslov();
        if(isset($_GET['id']))
            echo $vest->tekst();
        else
        {
            $a=$vest->deoTeksta();
            if(isset($_POST['termin']))
                echo str_replace(strtolower($_POST['termin']), "<span style='background-color:yellow'>".$_POST['termin']."</span>", strtolower($a));
            else
                echo $a;
        }
            
        
        
        echo $vest->aiv();

        echo "</div>";
    }
    unset($db);
    ?>
</body>
</html>