<?php
function zbir($a, $b){
    if(is_string($a) and is_string($b))
        return "Konkatenacija stringova je $a$b<br>";
    else
        return "Zbir brojeva $a i $b je ".($a+$b)."<br>";
}

function poruka($str, $opcija){
    if($opcija==0) $boja="red";
    if($opcija==1) $boja="green";
    if($opcija==2) $boja="blue";
    return "<p style='background-color: $boja; color: white; width:300px'>$str</p>";
}

echo poruka("Neuspela konekcija na bazu", 0);
echo poruka("Nedozvoljeno deljenje nulom!!", 0);
echo poruka("Podaci uspesno snimljeni", 1);
echo poruka("Morate biti prijavljeni!!!", 2);

?>