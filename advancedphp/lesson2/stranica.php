<?php
$pb="black";
$bs="white";
$vs="16";
if(isset($_COOKIE['pb'])) $pb=$_COOKIE['pb'];
if(isset($_COOKIE['bs'])) $bs=$_COOKIE['bs'];
if(isset($_COOKIE['vs'])) $vs=$_COOKIE['vs'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="color: <?= $bs?>; background-color: <?= $pb?>; font-size: <?= $vs?>px">
    <h1>Stranica za gledanje</h1>
</body>
</html>