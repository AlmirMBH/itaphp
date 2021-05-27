<?php
$niz=array("ime"=>"Pera","prezime"=>"Peric","godina"=>2005,"status"=>"Admin");
foreach($niz as $k=>$v)
    echo "$k: $v<br>";
echo "<hr>";
asort($niz);
foreach($niz as $k=>$v)
    echo "$k: $v<br>";
echo "<hr>";
arsort($niz);
foreach($niz as $k=>$v)
    echo "$k: $v<br>";
echo "<hr>";
?>