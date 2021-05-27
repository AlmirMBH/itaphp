<?php
require_once("funkcije.php");
$db=konekcija();
if(!$db) exit(1);
echo "Uspesna konekcija!!!<hr>";
$upit="SELECT * FROM korisnici";
$rez=mysqli_query($db, $upit);
if(mysqli_error($db))
{
    echo mysqli_errno($db)."<br>".mysqli_error($db)."<hr>";
    exit(1);
}
echo "Broj redova: ".mysqli_num_rows($rez)."<hr>";
echo "<h2>FOR petlja</h2>";
for($i=0;$i<mysqli_num_rows($rez);$i++)
{
    //$red=mysqli_fetch_array($rez, MYSQLI_ASSOC);
    $red=mysqli_fetch_assoc($rez);
    echo "{$red['id']}: {$red['ime']} {$red['prezime']} ({$red['status']})<br>";
}
$upit="SELECT * FROM korisnici";
$rez=mysqli_query($db, $upit);
echo "<h2>WHILE petlja</h2>";
while($red=mysqli_fetch_assoc($rez))
    echo "{$red['id']}: {$red['ime']} {$red['prezime']} ({$red['status']})<br>";        

mysqli_close($db);
?>