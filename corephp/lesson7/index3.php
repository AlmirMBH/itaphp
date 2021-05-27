<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Stranica 3</h1>
    <form action="index3.php" method="get">
        <input type="text" name='ime' placeholder="Unesite ime"><br><br>
        <input type="text" name='prezime' placeholder="Unesite prezime"><br><br>
        <!--<input type="submit" name="dugme" value="Klikni me"/><br><br>-->
        <button>Klikni me</button>
    </form>
    <hr>
    <?php
    if(isset($_GET['ime']) and isset($_GET['prezime']))
    {
        $ime=$_GET['ime'];
        $prezime=$_GET['prezime'];
        if($ime=="" or $prezime=="")
            echo "Podaci su obavezni<br>";
        else
            echo "Vrednost koju ste uneli je: $ime $prezime<br>";
    }
    else 
        echo "Dobro dosli na stranicu<br>";
    ?>
    <?php
    //var_dump($_SERVER);
    ?>
</body>
</html>