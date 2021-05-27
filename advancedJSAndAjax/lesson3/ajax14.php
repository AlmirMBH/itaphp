<?php
$izbor=$_GET['izbor'];
$op1=$_POST['op1'];
$op2=$_POST['op2'];

if($izbor=="sabiranje")
{
    echo $op1+$op2;
}
if($izbor=="oduzimanje")
{
    echo $op1-$op2;
}
if($izbor=="mnozenje")
{
    echo $op1*$op2;
}
if($izbor=="deljenje")
{
    echo $op1/$op2;
}
?>