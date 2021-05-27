<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fread i File_get_contents</title>
</head>
<body>
    <h1>Citanje iz datoteke</h1>
    <?php
        $ime="datoteka.txt";
        if(file_exists($ime))
        {
            $f=fopen($ime, "r");
            $tekst=fread($f, filesize($ime));
            fclose($f);
            //$tekst=str_replace("\n", "<br>", $tekst);
            $tekst=nl2br($tekst); // ista funkcija kao linija iznad
            echo "Procitan tekst: <br>$tekst<br>";
        }
        else
            echo "Ne postoji datoteka";
        
    ?>
    <hr>
    <?php
    if(file_exists($ime))
    {
        $tekst=file_get_contents($ime);
        $tekst=nl2br($tekst);
        echo $tekst;
    }
    else
        echo "Ne postoji datoteka";
    ?>
</body>
</html>