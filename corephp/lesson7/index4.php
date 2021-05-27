<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Stranica 4</h1>
    <form action="index4.php" method="get">
        <input type="text" name="tekst" /><br><br>
        <input type="email" name="email"><br><br>
        <input type="number" name="broj" min="0" max="1000" step="100" value='100'><br><br>
        <input type="date" name="datum"><br><br>
        <input type="time" name="vreme"><br><br>
        <textarea name="vecitekst" cols="30" rows="10"></textarea><br><br>
        <button>Klikni me</button>
    </form>
    <hr>
    <?php
        if(isset($_GET['tekst']) and $_GET['tekst']!="")
            echo "Tekst je: ".$_GET['tekst']."<br>";
        if(isset($_GET['email']) and $_GET['email']!="")
            echo "Email je: ".$_GET['email']."<br>";
        if(isset($_GET['broj']) and $_GET['broj']!="0")
            echo "Broj je: ".$_GET['broj']."<br>";
        if(isset($_GET['datum']))
            echo "Datum je: ".$_GET['datum']."<br>";
        if(isset($_GET['vreme']))
            echo "Vreme je: ".$_GET['vreme']."<br>";
        if(isset($_GET['vecitekst']) and $_GET['vecitekst']!="")
        {
            $vecitekst=$_GET['vecitekst'];
            $vecitekst=str_replace("\n", "<br>", $vecitekst);
            echo "Veci tekst je: <br>".$vecitekst."<br>";
        }
            
    ?>
</body>
</html>