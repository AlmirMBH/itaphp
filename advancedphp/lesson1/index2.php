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
    <title>INSERT INTO</title>
</head>
<body>
    <h1>INSERT INTO</h1>
    <form action="index2.php" method="post">
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
        if(isset($_POST['naslov']) and isset($_POST['tekst']) and isset($_POST['kategorija']))
        {
            $naslov=$_POST['naslov'];
            $tekst=$_POST['tekst'];
            $kategorija=$_POST['kategorija'];
            if($naslov!='' and $tekst!='' and $kategorija!='0')
            {
                $upit="INSERT INTO vesti (naslov, tekst, autor, kategorija) VALUES ('{$naslov}', '{$tekst}', 1, {$kategorija})";
                mysqli_query($db, $upit);
                if(mysqli_error($db))
                {
                    echo "Neuspelo snimanje vesti!!!!";
                    statistika($db, mysqli_error($db));
                } 
                else
                {
                    echo "Broj dodatih vesti: ".mysqli_affected_rows($db);
                    statistika($db, "Uspesno dodata vest {$naslov}");
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