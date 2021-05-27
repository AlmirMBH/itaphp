<?php
if(isset($_COOKIE['id']) and isset($_COOKIE['ime']) and isset($_COOKIE['status']))
{
    echo "Dobro dosli, {$_COOKIE['ime']}, prijavljeni ste kao {$_COOKIE['status']}";
}
else
    echo "Morate biti prijavljeni da biste videli stranicu!!!!";
?>