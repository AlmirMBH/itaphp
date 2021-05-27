<?php
require_once("klase/classOsoba.php");

$obj=new Osoba();
$obj->ime="Bosko";
echo "Ime: ".$obj->ime."<br>";
$obj->prezime="Bogojevic";
echo "Prezime: ".$obj->prezime."<br>";
$obj->godRodj=1976;
echo "Godina rodjenja: ".$obj->godRodj."<br>";
echo $obj->mojaMetoda();
echo $obj->godine();
echo "<hr>";
$obj2=new Osoba();
$obj2->ime="Pera";
echo "Ime: ".$obj2->ime."<br>";
$obj2->prezime="Peric";
echo "Prezime: ".$obj2->prezime."<br>";
$obj2->godRodj=1986;
echo "Godina rodjenja: ".$obj2->godRodj."<br>";
echo $obj2->mojaMetoda();
echo $obj2->godine();
?>