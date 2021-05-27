<?php
require_once("klase/classNasledjivanje.php");
$obj1=new Student("pera", "peric", 1986, "IT Akademija", "987/2020");
echo $obj1;
$obj2=new Radnik("Laza", "Lazic", 1976, "SBB", "Crnac");
echo $obj2;
$obj3=new Rukovodilac("Cane", "Kurbla", 1976, "SBB", "Mrezni operator", "Racunarske mreze");
echo $obj3;
?>