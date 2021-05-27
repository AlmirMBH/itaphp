<?php
class Osoba{
    public $ime;
    public $prezime;
    public $godRodj;
    public function mojaMetoda(){
        return "Ovo je tekst iz metode".$this->ime."<br>";
    }
    public function godine(){
        $god=date("Y")-$this->godRodj;
        return $this->ime." ima godina: ".$god."<br>";
    }
}
?>