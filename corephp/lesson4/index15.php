<?php
//namerno nemam index13.php
$osobe=array(
    array("slika"=>"slika1.jpg","naslov"=>"Moja prva vest","tekst"=>"Ovo je tekst moje prve vesti","autor"=>"bbosko", "datum"=>"24.11.2020"),
    array("slika"=>"slika2.jpg","naslov"=>"Moja druga vest","tekst"=>"Ovo je tekst moje druge vesti","autor"=>"ppera", "datum"=>"24.11.2020"),
    array("slika"=>"slika3.jpg","naslov"=>"Moja treca vest","tekst"=>"Ovo je tekst moje trece vesti","autor"=>"bbosko", "datum"=>"24.11.2020"),
    array("slika"=>"slika4.jpg","naslov"=>"Moja cetvrta vest","tekst"=>"Ovo je tekst moje cetvrte vesti","autor"=>"mile", "datum"=>"24.11.2020")
);
foreach($osobe as $v)
{
    echo "<div style='background-color: aqua; width:400px; margin: 5px'>";
    echo "<div style='display: inline-block; width=150px'><img height='50px' src='slike/{$v['slika']}'></div>";
    echo "<div style='display: inline-block; width=250px'><b>{$v['naslov']}</b><br>{$v['tekst']}<br>Pise: {$v['autor']} | {$v['datum']}</div>";
    echo "</div>";
}
?>