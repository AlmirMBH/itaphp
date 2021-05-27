<?php
$ime="x";
$vrednost="";
$vreme=time()-1;
$domen="/";
setcookie($ime, $vrednost, $vreme, $domen);
echo "Kolacic unisten";
?>