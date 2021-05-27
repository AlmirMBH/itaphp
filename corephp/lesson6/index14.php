<?php
require_once("funkcije3.php");
$x=kalkulator("sdasdsa", 10, "+");
if($x['greska']=="") echo poruka("Rezultat je: {$x['poruka']}", 1);
else echo poruka("Doslo je do greske: {$x['greska']}", 0);





$x=kalkulator(20, 10, "+");
if($x['greska']=="") echo poruka("Rezultat je: {$x['poruka']}", 1);
else echo poruka("Doslo je do greske: {$x['greska']}", 0);
$x=kalkulator(20, 10, "/");
if($x['greska']=="") echo poruka("Rezultat je: {$x['poruka']}", 1);
else echo poruka("Doslo je do greske: {$x['greska']}", 0);
$x=kalkulator(20, 0, "/");
if($x['greska']=="") echo poruka("Rezultat je: {$x['poruka']}", 1);
else echo poruka("Doslo je do greske: {$x['greska']}", 0);
?>