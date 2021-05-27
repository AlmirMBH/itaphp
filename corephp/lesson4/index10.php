<?php
$x=array();
for($i=0;$i<10;$i++)
    $x[$i]=mt_rand(-100, 100);
echo "Elementi niza su: ";
for($i=0;$i<count($x);$i++)
    echo "$x[$i], ";
echo "<hr>";
$max=$x[0];
$min=$x[0];
$suma=0;
for($i=0;$i<count($x);$i++)
{
    if($x[$i]>$max) $max = $x[$i];
    if($x[$i]<$min) $min = $x[$i];
    $suma+=$x[$i];
}
echo "Maksimalni elemenat ima vrednost $max<br>";
echo "Minimalni elemenat ima vrednost $min<br>";
echo "Suma niza je: $suma<br>";
echo "Srednja vrednost niza je: ".($suma/count($x))."<br>";
?>