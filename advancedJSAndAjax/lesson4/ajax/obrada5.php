<?php
$ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$a['greska']="";
$a['podatak']="";
if($ime=="" OR $prezime=="")$a['greska']="Svi podaci su neophodni za obradu";
else $a['podatak']="Poslati podaci su: {$ime} {$prezime}";
echo JSON_encode($a, 256);
?>