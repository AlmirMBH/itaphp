<?php
require_once("klase/classPoruka.php");
echo Poruka::greska("Ovo je neka greska");
echo Poruka::uspeh("Uspesno snimljeni podaci");
echo Poruka::info("Svi podaci su obavezni");
?>