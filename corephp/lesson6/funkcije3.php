<?php
function poruka($str, $opcija=0){
    if($opcija==0) $boja="red";
    if($opcija==1) $boja="green";
    if($opcija==2) $boja="blue";
    return "<p style='background-color: $boja; color: white; width:300px'>$str</p>";
}
function kalkulator($op1, $op2, $operacija){
    $odg['greska']="";
    $odg['poruka']="";
    if(!is_numeric($op1) or !is_numeric($op2) or !is_string($operacija))
    {
        $odg['greska']="Neki od operanada nije odgovarajuci";
        return $odg;
    }
    switch($operacija){
        case '+':   $odg['poruka']=$op1+$op2;    break;
        case '-':   $odg['poruka']=$op1-$op2;    break;
        case '*':   $odg['poruka']=$op1*$op2;    break;
        case '/':
            if($op2==0)
                $odg['greska']="Nedozvoljeno deljenje NULOM!!!!";
            else
                $odg['poruka']=$op1/$op2;
        break;
        default: $odg['greska']="Nepoznata racunska operacija!!";
    }
    return $odg;
}
?>