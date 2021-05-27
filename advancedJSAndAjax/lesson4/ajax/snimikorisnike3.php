<?php
$db=mysqli_connect("localhost", "root", "", "g2");
mysqli_query($db, "SET NAMES utf8");
$opcija=$_GET['opcija'];
if($opcija=="update")
{
    $sql="UPDATE korisnici SET ime='{$_POST['ime']}', prezime='{$_POST['prezime']}', komentar='{$_POST['komentar']}', status='{$_POST['status']}' WHERE id={$_POST['id']}";
    mysqli_query($db, $sql);
    if(mysqli_error($db)) echo "Greska!!!<br>".mysqli_error($db);
    else echo "Uspesno izmenjen korisnik";
}
if($opcija=="insert")
{
    //$sql="UPDATE korisnici SET ime='{$_POST['ime']}', prezime='{$_POST['prezime']}', komentar='{$_POST['komentar']}', status='{$_POST['status']}' WHERE id={$_POST['id']}";
    $sql="INSERT INTO korisnici (ime, prezime, email, lozinka, komentar, aktivan, status) VALUES ('{$_POST['ime']}', '{$_POST['prezime']}', '{$_POST['email']}', '12345', '{$_POST['komentar']}', '1', '{$_POST['status']}')";
    //echo $sql;
    mysqli_query($db, $sql);
    if(mysqli_error($db)) echo "Greska!!!<br>".mysqli_error($db);
    else echo "Uspesno dodat korisnik";
}

if($opcija=="delete")
{
    $sql="DELETE FROM korisnici WHERE id={$_POST['id']}";
    mysqli_query($db, $sql);
    if(mysqli_error($db)) echo "Greska!!!<br>".mysqli_error($db);
    else echo "Uspesno obrisan korisnik";
}
if($opcija=="select")
{
    $sql="SELECT * FROM korisnici order by id ASC";
    $rez=mysqli_query($db, $sql);
    $sviPodaci=mysqli_fetch_all($rez, MYSQLI_ASSOC);   
    echo JSON_encode($sviPodaci, 256);
}
?>