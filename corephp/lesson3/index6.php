<?php
$a=mt_rand(0,10);
echo "a=$a<hr>";
switch ($a)
{
    case 1:
        echo "a ima vrednost 1<br>";
    break;
    case 3:
        echo "a ima vrednost 3<br>";
    break;
    case 7:
        echo "a ima vrednost 7<br>";
    break;
    default:
        echo "a NIJE NI 1, NI 3 NI 7<br>";
    break;
}

?>