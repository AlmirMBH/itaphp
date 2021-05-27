<?php
require_once("klase/classKalkulator.php");
require_once("klase/classPoruka.php");
$kal=new Kalkulator(5, 12);
echo "Sabiranje: ".$kal->sabiranje()."<br>";
echo "Oduzimanje: ".$kal->oduzimanje()."<br>";
echo "Mnozenje: ".$kal->mnozenje()."<br>";
echo "Deljenje: ".$kal->deljenje()."<br>";
echo "Moduo: ".$kal->ostatak()."<br>";
echo "<hr>";
$kal=new Kalkulator(5, 0);
echo "Sabiranje: ".$kal->sabiranje()."<br>";
echo "Oduzimanje: ".$kal->oduzimanje()."<br>";
echo "Mnozenje: ".$kal->mnozenje()."<br>";
if(is_string($kal->deljenje()))
    echo Poruka::greska($kal->deljenje());
else
    echo "Deljenje: ".$kal->deljenje()."<br>";
if(is_string($kal->ostatak()))
    echo Poruka::greska($kal->ostatak());
else
    echo "Moduo: ".$kal->ostatak()."<br>";
?>