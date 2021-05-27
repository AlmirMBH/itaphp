<?php
$mail="ja@skola.edu.com......";
$tmp=explode("@", $mail);
if(count($tmp)==2)
{
    if($tmp[0]!="")
    {
        $drugi=explode(".", $tmp[1]);
        if(count($drugi)>1)
            echo "Mejl JE dobar";
        else
            echo "Mejl nije dobar, nema tacku";
    }
    else
        echo "Mejl nije dobar. @ na pocetku";
}
else    
    echo "Mejl nije dobar, nema @";
?>