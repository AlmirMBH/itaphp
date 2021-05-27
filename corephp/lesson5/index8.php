<?php
$niz1=array(1, 2, 3, 3, 3, 6);
$niz2=array("Pera", "Laza", "Mika");
$niz3=array_merge($niz2,$niz1);
for($i=0;$i<count($niz3);$i++)
    echo "$i: {$niz3[$i]}<br>"; 
echo "<hr>";
$niz3=array_unique($niz3);
$niz3[]=5;
foreach($niz3 as $k=>$v)
    echo "$k: $v<br>"; 
echo "<hr>";
$x=array_search("3", $niz3);
if($x===false)
    echo "nema trazenog elementa<br>";
else    
    echo "Ima ga, i nalazi se na $x mestu<br>";
echo "<hr>";
$eks="pdf";
$dozvoljeno=array("jpg", "png", "gif", "bmp", "jpeg");
if(in_array($eks, $dozvoljeno))
    echo "Ovo je OK za upload<br>";
else
    echo "Ovo nije slika<br>";
?>