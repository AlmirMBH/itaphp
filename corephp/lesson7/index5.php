<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Stranica 5</h1>
    <form action="index5.php" method="get">
        <select name="izbor" id="izbor">
            <option value="0">--Izaberite opciju--</option>
            <option value="1976">1976</option>
            <option value="1977">1977</option>
            <option value="1978">1978</option>
            <option value="1979">1979</option>
            <option value="1980">1980</option>
        </select><br><br>
        <input type="radio" name="radio1" value="muski" checked>Muski<br>
        <input type="radio" name="radio1" value="zenski">Zenski<br>
        <input type="radio" name="radio1" value="ostalo">Ostalo<br><br>
        <input type="checkbox" name='potvrda' value="1">Da li se slazete?<br><br>
        <button>Klikni me</button>
    </form>
    <hr>
    <?php
        if(isset($_GET['izbor']) and $_GET['izbor']!="0")
            echo "Izbor je: ".$_GET['izbor']."<br>";
        if(isset($_GET['radio1']))
            echo "Pol je: ".$_GET['radio1']."<br>";
        if(isset($_GET['potvrda']))
            echo "Slazete se sa uslovima koriscenja<br>";
        else
            echo "NE SLAZETE se sa uslovima koriscenja<br>";   
    ?>

<hr>
<h3>Select website</h3>
<form action="index5.php"  method="get">
    <select name="website">
        <option value="0">Select shop</option>
        <option value="1">Atemschutzmasken</option>
        <option value="2">Flipflop</option>
        <option value="3">Cheeselhuus</option>
        <option value="4">PM30</option><br><br>
    </select>
    <button>Submit</button>  
</form>

<?php 

if (isset($_GET['website']) and $_GET['website'] != 0 ){
    echo "The selected option is: " . $_GET['website'];
}

?>


</body>
</html>