<?php
    $db=mysqli_connect("localhost", "root", "", "g2");
    mysqli_query($db, "SET NAMES utf8");
    $sql="SELECT * FROM korisnici order by id ASC";
    $rez=mysqli_query($db, $sql);
    while($red=mysqli_fetch_object($rez))
        echo "<div class='korisnici' data-id='{$red->id}' data-ime='{$red->ime}' data-prezime='{$red->prezime}' data-komentar='{$red->komentar}' data-status='{$red->status}'>{$red->id}: {$red->ime} {$red->prezime}</div>";

?>