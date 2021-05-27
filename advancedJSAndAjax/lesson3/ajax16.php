<?php
$izbor=$_GET['izbor'];
$op1=$_POST['op1'];
$op2=$_POST['op2'];
$izlaz['greska']="Niste izabrali racunsku operaciju";
$izlaz['podatak']="";
if($izbor=="sabiranje")
{
    $izlaz['greska']="";
    $izlaz['podatak']=$op1+$op2;
}
if($izbor=="oduzimanje")
{
    $izlaz['greska']="";
    $izlaz['podatak']=$op1-$op2;
}
if($izbor=="mnozenje")
{
    $izlaz['greska']="";
    $izlaz['podatak']=$op1*$op2;
}
if($izbor=="deljenje")
{
    if($op2==0)
    {
        $izlaz['greska']="Nedozvoljeno deljenje 0";
        $izlaz['podatak']="";
    }
    else
    {
        $izlaz['greska']="";
        $izlaz['podatak']=$op1/$op2;
    }
    
}
echo JSON_encode($izlaz, 256);
?>