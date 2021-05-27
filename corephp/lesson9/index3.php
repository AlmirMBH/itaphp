<?php
require_once("klase/classOsoba3.php");
$obj=new Osoba();
$obj->ime="Bosko";
echo "Ime je: ".$obj->ime."<br>";

$obj->prezime="Bogojevic";
echo "Prezime je: ".$obj->prezime."<br>";
?>