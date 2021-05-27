<?php
$db=new SQLite3("mojaBaza.sqlite");
//$db->exec("CREATE TABLE korisnici (id integer primary key AUTOINCREMENT, ime varchar(255))");
$db->exec("INSERT INTO korisnici (ime) VALUES ('Bosko')");
$db->exec("INSERT INTO korisnici (ime) VALUES ('Pera')");
$db->exec("INSERT INTO korisnici (ime) VALUES ('Laza')");
unset($db);
?>