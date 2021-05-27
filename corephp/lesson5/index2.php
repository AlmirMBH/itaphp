<?php
$s="Ja idem u školu i dobar sam đak";
echo $s."<hr>"; 
$duzina=mb_strlen($s);
echo "Duzina stringa je: $duzina<br>";
$poz=mb_strpos($s, 'J');
echo "<br>Slovo je nadjeno na poziciji: $poz<br>";
$poz=mb_strpos($s, 'J');
if($poz===false)
    echo "Slovo se ne nalazi u stringu<br>";
else
    echo "SLOVO SE NALAZI U STRINGU<br>";
$lozinka="Pera=Peric";
if(mb_strlen($lozinka)<6)
    echo "Lozinka nema dovoljno karaktera!!!<br>";
else if(mb_strpos($lozinka, "=")===false)
    echo "Lozinka je OK!!!!<br>";
else
    echo "Lozinka sadrzi nedozvoljeni simbol!!!<br>";
?>