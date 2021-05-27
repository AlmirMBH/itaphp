<?php
try{
    $pdo=new PDO("mysql:host=localhost;dbname=test", "root", "");
}catch(Exception $e){
    echo $e->getMessage()."<br>";
}
//echo "Gotovo";

$brojUnetihRedova=$pdo->exec("INSERT INTO korisnici (ime) VALUES ('Bosko')");// or
//die(print_r ($pdo ->errorInfo(), true));
if($pdo->errorInfo()[2]!="") echo "Greska: ".$pdo->errorInfo()[2];
else echo "Uneto redova: $brojUnetihRedova<br>";
$brojPromenjenihRedova=$pdo->exec("UPDATE korisnici SET ime='Joca' WHERE ime='Bosko'");
echo "Izmenjeno korisnika: $brojPromenjenihRedova<br>";
$brojObrisanihRedova=$pdo->exec("DELETE FROM korisnici WHERE ime='Joca'");
echo "Broj obrisanih redova: $brojObrisanihRedova<br>";
unset ($pdo);
?>