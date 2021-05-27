<?php
require_once("klase/classOsoba2.php");
$obj=new Osoba();
//$obj->ime="Bosko";
$obj->dodajIme("");
//echo "Ime je: ".$obj->ime;
echo "Ime je: ".$obj->procitajIme();
?>