<?php
$meseci=array('januar', 'februar', 'mart', 'april', 'maj', 'jun', 'jul', 'avgust', 'septembar', 'oktobar', 'novembar', 'decembar');
$mesec=$meseci[mt_rand(0,11)];
echo "mesec je: $mesec<hr>";
switch($mesec)
{
    case 'mart': 
    case 'maj': 
    case 'jun': 
    case 'avgust': 
    case 'oktobar': 
    case 'decembar':
    case 'januar':
        echo "Mesec ima 31 dan";
    break;
    case 'april': case 'jul': case 'septembar': case 'novembar':
        echo "Mesec ima 30 dana";
    break;
    case 'februar':
        echo "Mesec ima 28 dana";
    break;
}
?>