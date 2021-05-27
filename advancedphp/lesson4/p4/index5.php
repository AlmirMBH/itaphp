<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upis u datoteku - APPEND mod</h1>
    <?php
    //print `dir`; //ispisuje fajlove direktorija
    //print `mkdir test`; //kreira direktorij u root folderu
    //print `rmdir pages`; //brise direktorij iz root foldera
    $ime="append.txt";
    $f=fopen($ime, "a");
    $tekstZaUpis=date("d.m.Y H:i:s", time())." - Upisan tekst!!!!\n";
    fwrite($f, $tekstZaUpis);
    fclose($f);
    echo "Tekst upisan u datoteku!!!!";
    ?>
</body>
</html>