<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upis sa FILE_PUT_CONTENTS</h1>
    <?php
    $ime="stranica.html";
    $tekstZaUpis="<html><body><h1>Ovo je upisano iz PHP-a</h1></body></html>";
    file_put_contents($ime, $tekstZaUpis);
    ?>
</body>
</html>