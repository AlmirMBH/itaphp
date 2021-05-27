<?php
require_once("funkcije.php");
$db=konekcija();
if(!$db)exit();
//print_r($_SERVER);
//statistika($db, "Dodavanje vesti");
if(isset($_POST['vest']))
{
    $vest=$_POST['vest'];
    if($vest!="0")
    {
        $upit="DELETE FROM vesti WHERE id={$vest}";
        mysqli_query($db, $upit);
        if(mysqli_error($db))
        {
            echo "Neuspelo brisanje vesti!!!!";
            statistika($db, mysqli_error($db));
        } 
        else
        {
            echo "Broj obrisanih vesti: ".mysqli_affected_rows($db);
            statistika($db, "Uspesno obrisana vest {$vest}");
        }
    }
    else
        echo "Niste izabrali vest za brisanje!!!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE</title>
</head>
<body>
    <h1>DELETE</h1>
    <form action="index4.php" method="post">
        <select name="vest" id="vest">
            <option value="0">--Izaberite vest za brisanje--</option>
            <?php
            $upit="SELECT * FROM vesti WHERE obrisan=0 ORDER BY id DESC";
            $rez=mysqli_query($db, $upit);
            while($red=mysqli_fetch_object($rez))
                echo "<option value='{$red->id}'>{$red->id}: {$red->naslov}</option>";
            ?>
        </select><br><br>
        <button>Izbrisi vest</button>
    </form>
    <hr>
</body>
</html>