<?php
function konekcija()
{
    $db=@mysqli_connect("localhost", "root", "", "g2");
    if(!$db)
    {
        echo "Neuspesna konekcija na bazu!!!<br>";
        echo mysqli_connect_errno()."<br>";
        echo mysqli_connect_error()."<br>";
        if(mysqli_connect_errno()==2002)
            echo "Navedeni MySQL server ne postoji<br>";
        return false;
    }
    mysqli_query($db, "SET NAMES utf8");
    return $db;
}

function meni($db)
{
    $upit="SELECT DISTINCT kategorija FROM vesti";
    $rez=mysqli_query($db, $upit);
    echo "<div><a href='index2.php'>Pocetna</a> ";
    while($red=mysqli_fetch_assoc($rez))
        echo "<a href='index2.php?kategorija=".$red['kategorija']."'>".$red['kategorija']."</a> ";
    echo "</div>";

}

function validanString($str)
{
    if(strpos($str, ' ')!==false) return false;
    if(strpos($str, '=')!==false) return false;
    return true;
}
?>