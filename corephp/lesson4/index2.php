<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
    <input type="text" name="n" placeholder="Unesite broj"><br><br>
    <button>Klikni me</button>
    </form>
</body>
</html>
<?php
//echo "Pocetak skripte<br>";
//$n=25648765987;
$n=$_POST['n'];
echo "Vrednost broja je: $n<hr>";
$brojac=0;
while($n>=1)
{
    $n=$n/10;
    $brojac++;
}
echo "Broj cifara je: $brojac<br>";
//echo "Kraj skripte  <br>";
?>