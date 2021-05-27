<?php
$s=file_get_contents("index7.html");
$naslov="OVO JE NASLOV";
$p="Ovo je tekst u paragrafu";
$div="Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi odit ullam autem nesciunt possimus qui nihil officiis distinctio voluptate natus reiciendis earum repellendus veniam explicabo, dolor cum, dolore facere magnam!";
$s=str_replace("#NASLOV#", $naslov, $s);
$s=str_replace("#PARAGRAF#", $p, $s);
$s=str_replace("#DIV#", $div, $s);
echo $s;
?>