<?php
    $osobe=array(
        array('ime' => 'Bosko', 'prezime' => 'Bogojevic', 'godine' => 40),
        array('ime' => 'Pera', 'prezime' => 'Peric', 'godine' => 42),
        array('ime' => 'Cane', 'prezime' => 'Kurbla', 'godine' => 39),
        array('ime' => 'Mile', 'prezime' => 'Dizna', 'godine' => 20)
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>treca stranica</h1>
    <?php
    echo $osobe[0]['ime'] . " " . $osobe[0]['prezime'] . " (" . $osobe[0]['godine'] . ")<br>";
    echo $osobe[1]['ime'] . " " . $osobe[1]['prezime'] . " (" . $osobe[1]['godine'] . ")<br>";
    echo $osobe[2]['ime'] . " " . $osobe[2]['prezime'] . " (" . $osobe[2]['godine'] . ")<br>";
    ?>
</body>
</html>