<?php
function poruka($str, $opcija=0){
    if($opcija==0) $boja="red";
    if($opcija==1) $boja="green";
    if($opcija==2) $boja="blue";
    return "<p style='background-color: $boja; color: white; width:300px'>$str</p>";
}
function minimum($a){
    if(is_array($a))
        return min($a);
    else
        return poruka("Ovo nije niz");
}
function maksimum($a){
    if(is_array($a))
        return max($a);
    else
        return poruka("Ovo nije niz");
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
 function minimum($a){
    if(is_array($a))
        return min($a);
    else
        return poruka("Ovo nije niz");
}
function maksimum($a){
    if(is_array($a))
        return max($a);
    else
        return poruka("Ovo nije niz");
}
function minimaxSaAsocNizom($a)
{
    $x['min']= minimum($a);
    $x['max']= maksimum($a);
    return $x;
}
function minimax($a)
{
    $min= minimum($a);
    $maks= maksimum($a);
    return "$min|$maks";
}
function minimaxSaNizom($a)
{
    $x[0]= minimum($a);
    $x[1]= maksimum($a);
    return $x;
}

?>

