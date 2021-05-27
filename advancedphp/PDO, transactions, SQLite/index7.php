<?php
$pdo=new PDO("sqlite:mojaBaza.sqlite");
$rez=$pdo->query("SELECT * FROM korisnici");
foreach($rez as $red)
    echo $red['id'].": ".$red['ime']."<br>";

unset($pdo);
?>