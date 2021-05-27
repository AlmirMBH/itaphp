<?php
$slika=$_POST['ime'];
if(!file_exists("../slike/{$slika}"))
    echo "Slika ne postoji";
else{
    if(!unlink("../slike/{$slika}")) echo "Neuspelo brisanje slike";
    else echo "0";
}

?>