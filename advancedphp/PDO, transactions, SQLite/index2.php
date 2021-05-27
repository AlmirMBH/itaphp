<?php
$pdo=new PDO("mysql:host=localhost;dbname=test", "root", "");
$rez=$pdo->query("SELECT * FROM korisnici");
//print_r($rez);
echo "<h2>Kombinovani podaci</h2>";
foreach($rez as $red)
    echo $red[0].": ".$red['ime']."<br>";
echo "<hr>";
echo "<h2>Asocijativni podaci</h2>";
$rez=$pdo->query("SELECT * FROM korisnici");
$pomrez=$rez->fetchAll(PDO::FETCH_ASSOC);
foreach($pomrez as $red)
    echo $red['id'].": ".$red['ime']."<br>";
echo "<hr>";
?>