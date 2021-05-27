<?php
//namerno nemam index13.php
$osobe=array(
    array("ime"=>"Bosko","prezime"=>"Bogojevic","visina"=>185,"tezina"=>100),
    array("ime"=>"Pera","prezime"=>"Peric","visina"=>200,"tezina"=>100),
    array("ime"=>"Cane","prezime"=>"Kurbla","visina"=>175,"tezina"=>75),
    array("ime"=>"Mile","prezime"=>"Dizna","visina"=>185,"tezina"=>85)
);
foreach($osobe as $v)
    //echo "{$v['ime']} {$v['prezime']} ({$v['visina']})<br>";
    echo $v['ime']. " " . $v['prezime'] . " (" . $v['visina'] . ")<br>";
?>