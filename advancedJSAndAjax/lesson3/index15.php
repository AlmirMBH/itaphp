<?php
$niz=[1, 2, 3, 4, 5, 6];
//echo $niz;
$json=JSON_encode($niz);
echo $json;
echo "<hr>";
$asoc=["ime"=>"Boško", "prezime"=>"Bogojević"];
//echo $asoc;
$json=JSON_encode($asoc, 256);
echo $json;
echo "<hr>";
$obj=JSON_decode($json);
echo $obj->ime;
?>