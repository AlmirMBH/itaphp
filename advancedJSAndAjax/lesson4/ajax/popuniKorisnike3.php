<?php
    $db=mysqli_connect("localhost", "root", "", "g2");
    mysqli_query($db, "SET NAMES utf8");
    $sql="SELECT * FROM korisnici order by id ASC";
    $rez=mysqli_query($db, $sql);
    $sviPodaci=mysqli_fetch_all($rez, MYSQLI_ASSOC);   
    echo JSON_encode($sviPodaci, 256);
?>