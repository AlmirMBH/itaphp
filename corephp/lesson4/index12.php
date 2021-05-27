<?php
$osobe=array(
    array("ime"=>"Bosko","prezime"=>"Bogojevic","visina"=>185,"tezina"=>100),
    array("ime"=>"Pera","prezime"=>"Peric","visina"=>200,"tezina"=>100),
    array("ime"=>"Cane","prezime"=>"Kurbla","visina"=>175,"tezina"=>75),
    array("ime"=>"Mile","prezime"=>"Dizna","visina"=>185,"tezina"=>85)
);
//Kombinacija FOR i FOREACH petlje
for($i=0;$i<count($osobe);$i++)
{
    foreach($osobe[$i] as $k=>$v)
    {
        echo "$k: $v<br>";
    }
    echo "<br>";
}

echo "<hr>";

//Dve FOREACH petlje
foreach($osobe as $vr)
{
    foreach($vr as $k=>$v)
    {
        echo "$k: $v<br>";
    }
    echo "<br>";
}
?>