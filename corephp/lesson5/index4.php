<?php
$niz=array();
$niz[]="Ja";
$niz[]="idem";
$niz[]="u";
$niz[]="skolu";
$niz[]="i";
$niz[]="dobar";
$niz[]="sam";$niz[]="djak";
$s=implode("%", $niz);
echo "Novi string: $s<br>";
$s="Lorem ipsum dolor sit amet, lorem adipisicing elit. LoREM tempora Lorem perspiciatis tempore voluptatem corporis ratione dignissimos quo aspernatur asperiores sequi amet molestiae veritatis, eum accusamus quia unde est fugit.";
$brojac=0;
$niz=explode(" ", $s);
for($i=0;$i<count($niz);$i++)
    if(strtoupper($niz[$i])=="LOREM") $brojac++;
echo "Broj reci Lorem u stringu je: $brojac<br>";
?>