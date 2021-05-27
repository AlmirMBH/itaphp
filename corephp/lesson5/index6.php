<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index6.php" method="post">
        <input type="text" name="pretraga" placeholder="Unesite termin pretrage"><br><br>
        <button>Pretrazi</button>
    </form>
    <hr>
    <?php
    if(isset($_POST['pretraga']))
    {
        $rec=$_POST['pretraga'];
        $s="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum animi at, laudantium eveniet Lorem sit labore voluptates ipsam incidunt nostrum officia, sunt iusto possimus cum tempora omnis Lorem, optio ipsum.";
        echo $s."<hr>";

        $ns=str_replace("$rec", "<span style='background-color: yellow'>$rec</span>", $s);
        echo $ns."<hr>";
    }
    else echo "Dobro dosli na stranicu za pretragu!!!!"; 
    ?>
</body>
</html>
