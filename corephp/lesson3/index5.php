<?php
$a=mt_rand(0,100);
$b=mt_rand(0,100);
$c=mt_rand(0,100);
$d=mt_rand(0,100);
echo "a=$a, b=$b, c=$c, d=$d<hr>";
$max=$a;
if($b>$max)$max=$b;
if($c>$max)$max=$c;
if($d>$max)$max=$d;

echo "najveci broj je: $max";
?>