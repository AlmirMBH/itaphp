<?php
session_start();
require_once("_require.php");
$db=new Baza();
if(!$db->connect())exit();
$poruka="";
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lineweb</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <?php include_once("_menu.php");?>
    <div class="content">
        <div id="main">

        <h2>Dodavanje proizvoda</h2>
        <form action="addproduct.php" method="post" enctype="multipart/form-data">
            <input type="text" name="naslov" placeholder="unesite naslov"><br><br>
            <textarea name="tekst" id="tekst" cols="30" rows="10" placeholder="unesite tekst"></textarea><br><br>
            <select name="kategorija" id="kategorija">
                <option value="0">--Izaberite kategoriju--</option>
                <?php
                $upit="SELECT * FROM kategorije ORDER BY naziv ASC";
                $rez=$db->query($upit);
                while($red=$db->fetch_object($rez))
                    echo "<option value='{$red->id}'>{$red->naziv}</option>";
                ?>
            </select><br><br>
            <input type="text" name="cena" id="cena" placeholder="unesite cenu"><br><br>
            <input type="file" name="slika"><br><br>
            <button name="btnSnimi">Snimite proizvod</button>
        </form>
        <hr>
        <?php
        if(isset($_POST['btnSnimi']))
        {
            $naslov=$_POST['naslov'];
            $tekst=$_POST['tekst'];
            $kategorija=$_POST['kategorija'];
            $cena=$_POST['cena'];
            if($naslov!="" and $tekst!="" and $cena!="" and $kategorija!="0" )
            {
                $upit="INSERT INTO proizvodi (naslov, tekst, autor, kategorija, cena) VALUES ('{$naslov}', '{$tekst}', {$_SESSION['id']}, {$kategorija}, {$cena})";
                $db->query($upit);
                if($db->error())
                {
                    $poruka=Poruka::greska("Greska prilikom izvrsavanja upita<br>".$db->error());
                    Statistika::upisiLog("logs/proizvodi.log", "{$_SESSION['ime']}, Greska prilikom izvrsavanja upita ".$db->error());
                }
                else
                {
                    $id=$db->insert_id();
                    $poruka=Poruka::uspeh("Uspesno dodat proizvod '$naslov' sa id: ".$id);
                    Statistika::upisiLog("logs/proizvodi.log", "{$_SESSION['ime']}, Uspesno dodat proizvod '$naslov' sa id: ".$id);
                    if($_FILES['slika']['name']!="")
                    {
                        $ime="slike/".$id.".jpg";
                        $tmp=$_FILES['slika']['tmp_name'];
                        $dozvoljeno=array("jpg", "jpeg", "webp", "png", "bmp");
                        if(in_array(pathinfo($ime, PATHINFO_EXTENSION), $dozvoljeno))
                        {
                            if(@move_uploaded_file($tmp, $ime))
                                $poruka.=Poruka::uspeh("Uspesno prebacena slika na server");
                            else
                                $poruka.= Poruka::greska("Neuspesan upload slike");
                        }
                    }
                }
            }
            else
                $poruka=Poruka::greska("Svi podaci su obavezni");
        }
              
              
        ?>
        <div><?= $poruka?></div>   

        </div>

        <?php include_once("_sidebar.php")?>
        </div>
        <?php include_once("_futer.php")?>
    </div>
</div>
</body>
</html>