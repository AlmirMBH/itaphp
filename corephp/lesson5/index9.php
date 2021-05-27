<?php
$niz1=array(1, -3, 2, 3, 56 , 3, 6, -12, 4, 8);
$niz2=array("Pera", "Laza", "Mika", "Bosko", "Cane");
foreach($niz1 as $k=>$v)
    echo "$k: $v<br>";
echo "<hr>";
sort($niz1);
foreach($niz1 as $k=>$v)
    echo "$k: $v<br>";
echo "<hr>";
rsort($niz1);
foreach($niz1 as $k=>$v)
    echo "$k: $v<br>";
?>
