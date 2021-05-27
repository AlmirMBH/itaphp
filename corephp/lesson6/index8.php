<?php
require_once("funkcije.php");
$niz=array(2,56,-5,23,8);
if(in_array(56, $niz))
    echo poruka("Broj postoji u nizu", 1);
else
    echo poruka("Broj NE postoji u nizu", 0);
echo "<hr>";

if(u_nizu2(562, $niz))
    echo poruka("Broj postoji u nizu", 1);
else
    echo poruka("Broj NE postoji u nizu", 0);
echo "<hr>";
$indeks=pretragaNiza(5, $niz);
if($indeks!==false)
    echo poruka("Broj postoji u nizu i njegovo mesto je $indeks", 1);
else
    echo poruka("Broj NE postoji u nizu", 0);
?>