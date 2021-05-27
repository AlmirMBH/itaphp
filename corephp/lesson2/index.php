<?php
    $x=5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "naslov"?></title>
</head>
<body>
    <h1>Prva stranica</h1>
    
    <?php
        $y=7;
        echo "<p>Ja idem u skolu i dobar sam djak</p><hr>";
        echo "<h3>Podnaslov</h3>";
        echo "<hr>";
        echo "Vrednost 'podatka' je: $x<br>";
        echo 'Vrednost "podatka" je: ' . $x . '<br>';
        echo "Vrednost 'podatka' je: " . ($x + $y) . "<br>";
        $x="Bosko";
        $y="Bogojevic";
        echo "Moje ime je: " . $x . " " . $y . "<hr>";
        echo mb_strlen("Boško");
        //echo strlen(utf8_decode("Boško"))
        echo "<hr>";
        echo strpos("Ja id<br>em u skolu", "J");
        echo "<hr>";
        $x=5;
        echo "Vrednost 'podatka' je: $x<br>";
        $x=8.7;
        echo "Vrednost 'podatka' je: $x<br>";
        $x='Pera';
        echo "Vrednost 'podatka' je: $x<br>";
        $x=true;
        echo "Vrednost 'podatka' je: $x<br>";

    ?>
    <br><br>    <br><br><br><br><br><br>
</body>
</html>