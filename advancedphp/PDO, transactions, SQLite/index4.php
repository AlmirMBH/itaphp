<?php
require_once("upiti.php");
$pdo=new PDO("mysql:host=localhost;dbname=test", "root", "");
$sql=$pdo->prepare($upit);
$ime="Bosko";
$sql->bindParam(":ime", $ime);
$sql->execute();
echo "Gotovo";
?>