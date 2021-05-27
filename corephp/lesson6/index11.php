<?php
require_once("funkcije2.php");
$niz=array(2,56,-5,23,8);
echo minimax($niz);
echo "<hr>";
$odgovor=minimax($niz);
$tmp=explode("|", $odgovor);
echo "<p>Minimum je: {$tmp[0]}<br>Maksimum je: {$tmp[1]}</p>";
echo "<hr>";
$odgovor=minimaxSaNizom($niz);
echo "<p>Minimum je: {$odgovor[0]}<br>Maksimum je: {$odgovor[1]}</p>";
echo "<hr>";
$odgovor=minimaxSaAsocNizom($niz);
echo "<p>Minimum je: {$odgovor['min']}<br>Maksimum je: {$odgovor['max']}</p>";
?>