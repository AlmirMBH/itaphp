<?php
function meni($db)
{
    $upit="SELECT DISTINCT kategorija FROM vesti";
    $rez=$db->query($upit);
    echo "<div><a href='vesti.php'>Pocetna</a> ";
    while($red=$db->fetch_assoc($rez))
        echo "<a href='vesti.php?kategorija=".$red['kategorija']."'>".$red['kategorija']."</a> ";
    echo "</div>";

}

function validanString($str)
{
    if(strpos($str, ' ')!==false) return false;
    if(strpos($str, '=')!==false) return false;
    return true;
}
?>