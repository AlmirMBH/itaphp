<?php
echo "Pocetak skripta<br>";
$x=mt_rand(0,10);
$y=mt_rand(0,10);
echo "x=$x, y=$y<hr>";
if($x>$y)
    echo "$x je vece<br>";
else if($x==$y)
{
    echo "brojevi su jednaki<br>";
}
else
{
    echo "$y je vece<br>";
}
echo "Kraj skripta<br>";
?>

<?php 

$x = mt_rand(0, 10);
$y = mt_rand(0, 10);

echo "Poredenje proizvoljnih brojeva <br>";
if($x > $y){
    echo $x . " je vece od " . $y . "<br>";
}elseif($x == $y){
    echo $x . " je jednako " . $y . "<br>";
}else{
    echo $x . " je manje od " . $y . "<br>";
}


?>