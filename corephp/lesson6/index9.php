<?php
require_once("funkcije.php");
$a=5;$b=7;$c=12;
$abc=zbir(zbir($a, $b), $c);
echo "<p>Rezultat zbira 3 broja je: $abc</p>";
$d=12;
$abcd=zbir(zbir($a, $b), zbir($c, $d));
echo "<p>Rezultat zbira 4 broja je: $abcd</p>";
?>