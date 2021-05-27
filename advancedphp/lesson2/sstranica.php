<?php
session_start();
if(isset($_SESSION['id']) and isset($_SESSION['ime']) and isset($_SESSION['status']))
{
    echo "Dobro dosli, {$_SESSION['ime']}, prijavljeni ste kao {$_SESSION['status']}<br>";
    echo "<a href='slogout.php'>Odjavite se</a>";
}
else
{
    header("location: slogin.php");
    echo "Morate biti prijavljeni da biste videli stranicu!!!!<br>";
    echo "<a href='slogin.php'>Prijavite se</a>";
}
    
?>