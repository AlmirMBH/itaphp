<?php
if(isset($_COOKIE['x']))
{
    $x=$_COOKIE['x'];
    echo "Vrednost promenljive 'a' je: $x";
}
else
    echo "Kolacic ne postoji";

?>