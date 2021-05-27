<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upis u datoteku - WRITE mod</h1>
    <?php
    $ime="ime.txt";
    $text = "Lorem jdsnjkdskn jkdnksjnksd kdnjknjksd dnsdnjsdk dsjnksjn sdndskjnds";
    $f=fopen($ime, "w");
    fwrite($f, $text);
    //fwrite($f, "Ovo je najnoviji tekst\n");
    //fwrite($f, "Ovo je najnoviji tekst\n");
    //fwrite($f, "Ovo je najnoviji tekst\n");
    //fwrite($f, "Ovo je najnoviji tekst\n");
    //fwrite($f, "Ovo je najnoviji tekst\n");
    //fclose($f);
    echo "Tekst upisan u datoteku!!!!";
    ?>
</body>
</html>