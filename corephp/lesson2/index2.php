<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ovo je druga stranica</h2>
    <?php
    $x=array(1,5,2,4,-9,6,5);
    $y=[5,3,6,5,9];
    echo $x[2]."<br>";
    $y[3]=65;
    echo $y[3]."<br>";
    echo "Zbir je: ".($x[1]+$y[4])."<br>";
    $y[5]=76;
    $y[]=9;
    array_push($y, 64);
    echo "Niz y ima ". count($y)." elemenata<br>";//sizeOf($y);
    $x=array(1, 5.7, "Pera", true, array(1,2,3));
    print_r($x) ;
    echo "<hr>";
    var_dump($x);
    echo "<hr>";
    $x=array('ime' => 'Bosko', 'prezime' => 'Bogojevic', 'godine' => 40);
    echo $x['ime']. " " . $x['prezime']. " (" . $x['godine'] . ")<br>";
    var_dump($x);
    ?>
    <br><br><br><br><br><br>
</body>
</html>