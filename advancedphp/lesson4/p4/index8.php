<?php
$imeDat=date("Y-m-d_", time())."komentari.txt";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Komentari</h1>
    <form action="index8.php" method="post">
        <input type="text" name="ime" placeholder="Unesite ime"><br><br>
        <textarea name="komentar" id="komentar" cols="30" rows="10" placeholder="Unesite komentar"></textarea><br><br>
        <button>Snimi komentar</button>
    </form>
    <hr>
    <?php
        if(isset($_POST['ime']) and isset($_POST['komentar']))
        {
            $ime=$_POST['ime'];
            $komentar=$_POST['komentar'];
            if($ime!="" and $komentar!="")
            {
                /*$f=fopen($imeDat, "a");
                $tekstZaUpis=date("d.m.Y H:i:s", time())."\n".$ime."\n".$komentar."\n\n";
                fwrite($f, $tekstZaUpis);
                fclose($f);*/
                $tekst=file_get_contents($imeDat);
                $tekstZaUpis=date("d.m.Y H:i:s", time())."\n".$ime."\n".$komentar."\n\n";
                $tekstZaUpis=$tekstZaUpis."".$tekst;
                file_put_contents($imeDat, $tekstZaUpis);
            }
            else echo "Svi podaci su obavezni!!!<br>";
        }

        if(file_exists($imeDat))
        {
            echo "<h3>Uneti komentari</h3>";
            $tekst=file_get_contents($imeDat);
            $tekst=nl2br($tekst);
            echo $tekst;
        }
        else
            echo "Nema ni jedan komentar!!!!";
    ?>
</body>
</html>