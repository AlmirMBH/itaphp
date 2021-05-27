<?php
$vreme=array("suncano", "oblacno", 'kisica', 'magla', 'pljusak', 'sneg');
$trenutno=$vreme[mt_rand(0, 5)];
echo "Trenutno vreme je: $trenutno<hr>";
switch($trenutno)
{
    case 'suncano':
        echo "<img src='slike/01-s.png' width='100px'/>";
    break;
    case "oblacno":
        echo "<img src='slike/07-s.png' width='100px'/>";
    break;
    case "kisica":
        echo "<img src='slike/12-s.png' width='100px'/>";
    break;
    case "magla":
        echo "<img src='slike/11-s.png' width='100px'/>";
    break;
    case "pljusak":
        echo "<img src='slike/18-s.png' width='100px'/>";
    break;
    case "sneg":
        echo "<img src='slike/22-s.png' width='100px'/>";
    break;
}
?>