<?php
/*$x=mt_rand();
echo "Broj je: $x<br>";
$x=mt_rand(-100, 100);
echo "Broj je: $x<hr>";*/
$niz=array();
for($i=0;$i<50;$i++)
    {$niz[]=mt_rand(-100, 100);}
for($i=0;$i<count($niz);$i++)
    echo "{$niz[$i]}, ";
/*$suma=0;
for($i=0;$i<50;$i++)
    $suma+=$niz[$i];
echo "<br>Suma svih elemenata niza je: $suma<br>";*/
$suma=array_sum($niz);
echo "<br>Suma svih elemenata niza koristeci array_sum() je: $suma<br>";
$min=min($niz);
echo "<br>najmanji elemenat koristeci min() je: $min<br>";
$max=max($niz);
echo "<br>najveci elemenat koristeci max() je: $max<br>";
/*$max=max(-96, 52, 2, 4, 96);
echo "<br>najveci elemenat od 5 brojeva koristeci max() je: $max<br>";*/
echo "<br>Srednja vrednost niza je: ".($suma/count($niz))."<br>";
?>