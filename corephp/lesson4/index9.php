<?php
$x=array(2,6,5,32,-65,-9,25,13);
echo "Broj elemenata niza je: ".count($x)."<hr>";
echo "<table border='1'><tr><th>Indeks</th><th>Vrednost</th></tr>";
for($i=0;$i<count($x);$i++)
{
    echo "<tr><td>$i</td><td>$x[$i]</td></tr>";
    //echo "$i: $x[$i]<br>";
}
"</table>";
?>