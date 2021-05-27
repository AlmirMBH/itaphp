<?php
$boje=array("aqua", "blue", "green", "yellow", "lightgray");
$n=5;
$brojac=0;
while($n>0)
{
    echo "<div style='color: red; background-color:$boje[$brojac]; margin:2px'>Vrednost brojaca je: $brojac</div>";
    $n--;
    $brojac++;
}
?>