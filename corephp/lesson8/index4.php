<?php
//print_r($_SERVER);
echo "IP adresa korisnika: ".$_SERVER['REMOTE_ADDR']."<br>";
echo "Stranica koju je posetio: ".$_SERVER['SCRIPT_NAME']."<br>";
echo "Vest koju je pogledao: ".$_SERVER['QUERY_STRING']."<br>";
echo "Vreme: ".date("d.m.Y H:i:s", $_SERVER['REQUEST_TIME'])."<br>";

?>