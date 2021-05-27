<?php
require_once("klase/classOsoba4.php");
$obj=new Osoba("Bosko", "Dusan", "Bogojevic", 1976, 111111111111);
echo "Ime je: ".$obj->ime."<br>";
echo "Prezime je: ".$obj->prezime."<br>";
echo $obj->godine();

echo $obj;

unset($obj);
echo "Kraj skripte<br>";

?>