<?php
require_once("funkcije4.php");
$username="bboskoasdsad";
$password="bboskoZxZx";
if(!validanString($username)) {
    echo poruka("Korisnicko ime nije dobro", 0);
    exit();
}
if(!validanString($password)) {
    echo poruka("Lozinka nije dobra", 0);
    exit();
}
echo poruka("Oba podatka su ispravna", 2);
?>