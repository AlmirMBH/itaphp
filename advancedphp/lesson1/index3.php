<?php
require_once("funkcije.php");
$db=konekcija();
if(!$db)exit();
//print_r($_SERVER);
//statistika($db, "Dodavanje vesti");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>
    <h1>UPDATE</h1>
    <form action="index3.php" method='post'>
    <select name="vest" id="vest">
        <option value="0">--Izaberite vest za izmenu--</option>
        <?php
        $upit="SELECT * FROM vesti WHERE obrisan=0 ORDER BY id DESC";
        $rez=mysqli_query($db, $upit);
        while($red=mysqli_fetch_object($rez))
            echo "<option value='{$red->id}'>{$red->id}: {$red->naslov}</option>";
        ?>
    </select><br><br>
    <input type="text" name='naslov' placeholder="Unesite naslov"><br><br>
    <textarea name="tekst" id="tekst" cols="30" rows="10" placeholder="Unesite tekst"></textarea><br><br>
    <select name="kategorija" id="kategorija">
        <option value="0">--Izaberite kategoriju--</option>
        <?php
        $upit="SELECT * FROM kategorije";
        $rez=mysqli_query($db, $upit);
        while($red=mysqli_fetch_object($rez))
            echo "<option value='{$red->id}'>{$red->naziv}</option>";
        ?>
    </select><br><br>
    <button>Snimi vest</button>
    </form>
    <hr>
    <?php
        if(isset($_POST['vest']) and isset($_POST['naslov']) and isset($_POST['tekst']) and isset($_POST['kategorija']))
        {
            $naslov=$_POST['naslov'];
            $tekst=$_POST['tekst'];
            $kategorija=$_POST['kategorija'];
            $vest=$_POST['vest'];
            if($naslov!='' and $tekst!='' and $kategorija!='0' and $vest!="0")
            {
                $upit="UPDATE vesti SET naslov='{$naslov}', tekst='{$tekst}', kategorija={$kategorija} WHERE id={$vest}";
                mysqli_query($db, $upit);
                if(mysqli_error($db))
                {
                    echo "Neuspela izmena vesti!!!!";
                    statistika($db, mysqli_error($db));
                } 
                else
                {
                    echo "Broj izmenjenih vesti: ".mysqli_affected_rows($db);
                    statistika($db, "Uspesno izmenjena vest {$naslov}");
                }
                    
            }
            else
                echo "Svi podaci su obavezni";
        }
        else
            echo "Dobro dosli na stranicu";
    ?>
</body>
</html>