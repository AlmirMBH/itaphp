<?php
$ime="x";
$vrednost="Ovo je vrednost";
$vreme=time()+60;
$domen="/";
setcookie($ime, $vrednost, $vreme, $domen);
echo "Kolacic kreiran";
?>