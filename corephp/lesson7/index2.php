<?php
if(isset($_GET['a']) and isset($_GET['b']) and isset($_GET['funkcija']))
{
    $a=$_GET['a'];
    echo "Vrednost promenljive a je: $a<br>";
    $b=$_GET['b'];
    echo "Vrednost promenljive b je: $b<br>";
    $funkcija=$_GET['funkcija'];
    echo "Vrednost promenljive c je: $funkcija<br>";
    echo "<hr>";
    if($funkcija=="brojevi") echo "Zbir dva broja je: ".($a+$b)."<br>";
    else echo "Konkatenacija stringova je: $a$b<br>";
}
else
    echo "Svi podaci su obavezni<br>";


?>
<a href="http://localhost/corephp/g2/p7/index2.php?a=7&b=56&funkcija=brojevi">Link za brojeve</a><br>
<a href="http://localhost/corephp/g2/p7/index2.php?a=Bosko&b=Bogojevic&funkcija=stringovi">Link za stringove</a><br>