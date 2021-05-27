<?php
$pdo=new PDO("mysql:host=localhost;dbname=test", "root", "");
$pdo->beginTransaction();
$ime="s";
try{
    for($i=0; $i<100;$i++)
    {
        $pdo->exec("INSERT INTO korisnici (ime) VALUES ('{$ime}')");
        if($pdo->errorInfo()[2]!="")
        {
            echo "Greska: ".$pdo->errorInfo()[2];
            throw new Exception("Greska");
        } 
        echo $pdo->lastInsertId()."<br>";
        $ime.="s";
    }
    $pdo->commit();
}catch(Exception $e)
{
    echo "Greska";
    $pdo->rollback();
}
echo "Gotovo";

    


?>