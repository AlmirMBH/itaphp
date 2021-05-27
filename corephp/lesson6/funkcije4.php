<?php
function validanString($str){
    if(mb_strlen($str)<7) return false;
    /*if(mb_strpos($str, "=")!==false) return false;
    if(mb_strpos($str, " ")!==false) return false;
    if(mb_strpos($str, "'")!==false) return false;
    if(mb_strpos($str, '"')!==false) return false;
    if(mb_strpos($str, "(")!==false) return false;
    if(mb_strpos($str, ")")!==false) return false;*/
    $nedozvoljeni=array("="," ","'"," ("," )",'"',";");
    foreach($nedozvoljeni as $v)
        if(mb_strpos($str, $v)!==false) return false;
    return true;
}

function poruka($str, $opcija=0){
    if($opcija==0) $boja="red";
    if($opcija==1) $boja="green";
    if($opcija==2) $boja="blue";
    return "<p style='background-color: $boja; color: white; width:300px'>$str</p>";
}
?>