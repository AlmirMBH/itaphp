<?php
{

    $osobe=array(
        array("ime"=>"Pera", "prezime"=>"Peric", "plata"=>40000),
        array("ime"=>"Laza", "prezime"=>"Lazic", "plata"=>40000),
        array("ime"=>"Mile", "prezime"=>"Jovic", "plata"=>40000),
        array("ime"=>"Cane", "prezime"=>"Kurbla", "plata"=>40000)
    );
}


foreach ($osobe as $osoba){
    echo $osoba['ime'] . " " . $osoba['ime'] . "<br/>";
}

//var_dump($osobe);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Stranica 1</h1>
    <table border="1">
        <tr>
            <th>Ime</th><th>Prezime</th><th>Plata</th>
        </tr>
        <tr>
            <td><?php echo $osobe[0]['ime']?></td><td><?= $osobe[0]['prezime']?></td><td><?= $osobe[0]['plata']?></td>
        </tr>
        <tr>
        <td><?php echo $osobe[1]['ime']?></td><td><?= $osobe[1]['prezime']?></td><td><?= $osobe[1]['plata']?></td>
        </tr>
        <tr>
            <td>Pera</td><td>Peric</td><td>40000</td>
        </tr>
        <tr>
            <td>Pera</td><td>Peric</td><td>40000</td>
        </tr>
    </table>
</body>
</html>

