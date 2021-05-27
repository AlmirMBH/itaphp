<?php
function zbir($a, $b){
    if(is_string($a) and is_string($b))
        return "Konkatenacija stringova je $a$b<br>";
    else
        return "Zbir brojeva $a i $b je ".($a+$b)."<br>";
}
function greska($str){
    return "<p style='background-color: red; color: white; width:300px'>$str</p>";
}

function uspeh($str){
    return "<p style='background-color: green; color: white; width:300px'>$str</p>";
}

function info($str){
    return "<p style='background-color: blue; color: white; width:300px'>$str</p>";
}

echo greska("Nedozvoljeno deljenje nulom!!!");
echo greska("Neuspela konekcija na bazu!!!");

echo uspeh("Podaci uspesno snimljeni");

echo info("Morate biti prijavljeni!!!");


?>