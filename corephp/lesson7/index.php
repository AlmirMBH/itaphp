<?php
if(isset($_GET['a']) and isset($_GET['b']) and isset($_GET['c']))
{
    $a=$_GET['a'];
    echo "Vrednost promenljive a je: $a<br>";
    $b=$_GET['b'];
    echo "Vrednost promenljive b je: $b<br>";
    $c=$_GET['c'];
    echo "Vrednost promenljive c je: $c<br>";
}
else
    echo "Svi podaci su obavezni<br>";

?>