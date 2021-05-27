<?php
$boje=array('white', 'red', 'green', 'blue', 'purple', 'pink', 'yellow');
$pb=$boje[mt_rand(0, 6)];
echo "Pozadinska boja: $pb<hr>";
switch($pb)
{
    case 'white':
        $bs='black';
    break;
    case 'red':
        $bs='white';
    break;
    case 'green':
        $bs='white';
    break;
    case 'blue':
        $bs='white';
    break;
    case 'purple':
        $bs='yellow';
    break;
    case 'pink':
        $bs='darkgray';
    break;
    case 'yellow':
        $bs='brown';
    break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style='background-color: <?= $pb?>; color: <?= $bs?>'>
    <h1>Stranica 9</h1>
</body>
</html>