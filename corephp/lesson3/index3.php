<?php
$temperatura=mt_rand(-10, 40);
echo "$temperatura<hr>";
if($temperatura>25)
    echo "Kratki rukavi";
else if($temperatura<=25 and $temperatura>10)
    echo "Dugi rukavi";
else if($temperatura<=10 and $temperatura>0)
    echo "Jakna";
else
    echo "Zimska jakna";
?>