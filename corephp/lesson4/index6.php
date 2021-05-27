<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index6.php" method="post">
    <input type="text" name="n" placeholder="Unesite broj"><br><br>
    <button>Klikni me</button>
    </form>
</body>
</html>
<?php
//echo "Pocetak skripte<br>";
$n=25648765987;
//$n=$_POST['n'];
echo "Vrednost broja je: $n<hr>";
$brojac=0;
$suma=0;
do{
    $brojac++;
    $suma+=$n%10;
    $n/=10;//$n=$n/10;
}while($n>=1);
echo "Broj cifara je: $brojac<br>";
echo "Suma svih cifara je: $suma<br>";
//echo "Kraj skripte  <br>";
?>