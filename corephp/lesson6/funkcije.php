<?php
function poruka($str, $opcija=0){
    if($opcija==0) $boja="red";
    if($opcija==1) $boja="green";
    if($opcija==2) $boja="blue";
    return "<p style='background-color: $boja; color: white; width:300px'>$str</p>";
}

function minimum($a){
    if(is_array($a))
        return "<p>Minimum niza je ".min($a)."<p>";
    else
        return poruka("Ovo nije niz");
}

function maksimum($a){
    if(is_array($a))
        return "<p>Maksimum niza je ".max($a)."<p>";
    else
        return poruka("Ovo nije niz");
}

function minimax($a)
{
    echo minimum($a);
    echo maksimum($a);
}

function u_nizu($igla, $plastSena){
    if(!is_array($plastSena)) return poruke("Ovo nije niz");
    for($i=0;$i<count($plastSena);$i++)
        if($plastSena[$i]==$igla) return true;
    return false;
}

function pretragaNiza($igla, $plastSena){
    if(!is_array($plastSena)) return poruke("Ovo nije niz");
    for($i=0;$i<count($plastSena);$i++)
        if($plastSena[$i]==$igla) return $i;
    return false;
}

function u_nizu2($igla, $plastSena){
    if(pretragaNiza($igla, $plastSena)===false) return false;
    else return true;
}

function zbir($a, $b){
    $zbir=$a+$b;
    return $zbir;
}
 function maksTriBroja($a, $b, $c){
     if($a>$b and $a>$c) return $a;
     else if($b>$c) return $b;
     else return $c;
 }
 
?>
