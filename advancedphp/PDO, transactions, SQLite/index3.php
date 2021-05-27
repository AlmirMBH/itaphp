<?php
class Korisnik{
    public $id;
    public $ime;
}
$pdo=new PDO("mysql:host=localhost;dbname=test", "root", "");
echo "<h2>Podaci kao objekti</h2>";
$rez=$pdo->query("SELECT * FROM korisnici");
$pomrez=$rez->fetchAll(PDO::FETCH_CLASS, "Korisnik");
foreach($pomrez as $red)
    echo $red->id.": ".$red->ime."<br>";
?>