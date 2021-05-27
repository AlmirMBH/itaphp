<?php
    $ime=$_POST['ime'];
    $privremenoIme=$_FILES['slika']['tmp_name'];
    $originalnoIme=$_FILES['slika']['name'];
    $a['greska']="";
    $a['podatak']="";
    //$a['podatak']="{$ime} {$originalnoIme} ({$privremenoIme})";
    //move_uploaded_file($privremenoIme,"slike/".$originalnoIme )
    if(!@move_uploaded_file($privremenoIme, "../slike/".$originalnoIme)) $a['greska']="Neuspeo upload slike";
    else $a['podatak']=$originalnoIme;
    echo JSON_encode($a, 256);
?>