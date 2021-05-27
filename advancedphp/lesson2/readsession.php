<?php
session_start();
if(isset($_SESSION['x']))
{
    $x=$_SESSION['x'];
    echo "Promenljiva sesije 'x' ima vrednost: $x";
}
else
{
    echo "Morate biti prijavljeni da biste videli ovu stranicu<br>";
    echo "<a href='setsession.php'>Pokreni sesiju</a>";
}
    


?>