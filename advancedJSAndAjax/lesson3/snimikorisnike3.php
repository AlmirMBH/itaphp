<?php
$db=mysqli_connect("localhost", "root", "", "g2");
mysqli_query($db, "SET NAMES utf8");
$opcija=$_GET['opcija'];
if($opcija=="update")
{
    $sql="UPDATE korisnici SET ime='{$_POST['ime']}', prezime='{$_POST['prezime']}', komentar='{$_POST['komentar']}', status='{$_POST['status']}' WHERE id={$_POST['id']}";
    mysqli_query($db, $sql);
}
?>