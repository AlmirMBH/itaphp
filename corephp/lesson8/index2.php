<?php
require_once("funkcije.php");
$db=konekcija();
if(!$db)exit();

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
    <form action="index2.php" method="post">
        <input type="text" name="termin" placeholder='Unesite termin pretrage'> <button>Pretrazi</button>
    </form>
    <?php
    meni($db);
    $upit="SELECT * FROM vesti WHERE obrisan=0";
    if(isset($_GET['id']))$upit="SELECT * FROM vesti WHERE obrisan=0 AND id=".$_GET['id'];
    if(isset($_GET['kategorija']))$upit="SELECT * FROM vesti WHERE obrisan=0 AND kategorija='".$_GET['kategorija']."'";
    if(isset($_GET['autor']))$upit="SELECT * FROM vesti WHERE obrisan=0 AND autor='".$_GET['autor']."'";
    if(isset($_POST['termin']))$upit="SELECT * FROM vesti WHERE obrisan=0 AND (naslov LIKE ('%".$_POST['termin']."%') OR tekst LIKE ('%".$_POST['termin']."%'))";
    $rez=mysqli_query($db, $upit);
    if(mysqli_error($db))
    {
        echo "Greska prilikom izvrsavanja upita!!!!<br>";
        echo mysqli_error($db)." (".mysqli_errno($db).")";
        exit();
    }
    echo "Broj vesti: ".mysqli_num_rows($rez)."<hr>";
    while($red=mysqli_fetch_assoc($rez))
    {
        echo "<div style='border: 1px solid black; width:300px;margin:2px;padding:2px'>";
        echo "<a href='index2.php?kategorija=".$red['kategorija']."'>".$red['kategorija']."</a><br>";
        echo "<h3><a href='index2.php?id=".$red['id']."'>".$red['naslov']."</a></h3>";
        if(isset($_POST['termin'])) $red['tekst']=str_replace(strtolower($_POST['termin']), "<span style='background-color:yellow'>".$_POST['termin']."</span>", strtolower($red['tekst']));
        if(isset($_GET['id']))
            echo $red['tekst']."<br>";
        else{
            $tmp=explode(" ", $red['tekst']);
            for($i=0;$i<20;$i++)
                echo $tmp[$i]." ";
            echo "<br>";
        }
        
        echo "<b><a href='index2.php?autor=".$red['autor']."'>".$red['autor']."</a></b> <i>".$red['vreme']."</i><br>";

        echo "</div>";
    }
    mysqli_close($db);
    ?>
</body>
</html>