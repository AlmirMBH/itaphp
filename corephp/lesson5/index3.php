<?php
$s="Ja idem u školu i dobar sam đak";
$niz=explode("a", $s);
echo $s."<hr>";
echo "Broj elemenata novog niza je: ".count($niz)."<br>";
for($i=0;$i<count($niz);$i++)
    echo "$i: {$niz[$i]}<br>";
echo "<hr>";
$vest="Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit aspernatur dolore inventore dolor obcaecati expedita et ad, aliquid distinctio? Deleniti doloribus dolor ex laboriosam iure? Iste qui a impedit ipsum!";
$vest.="Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit aspernatur dolore inventore dolor obcaecati expedita et ad, aliquid distinctio? Deleniti doloribus dolor ex laboriosam iure? Iste qui a impedit ipsum!";
echo "<div style='width:300px'>$vest</div>";
echo "<hr>";
echo "<div style='width:300px'>";
/*for($i=0; $i<210;$i++)
    echo $vest[$i];*/
$niz=explode(" ", $vest);
for($i=0; $i<25;$i++)
    echo $niz[$i]. " ";
echo "......</div>";
?>