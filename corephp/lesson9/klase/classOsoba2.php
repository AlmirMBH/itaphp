<?php
class Osoba{
    protected $ime;
    protected $prezime;
    protected $godRodj;
    public function mojaMetoda(){
        return "Ovo je tekst iz metode".$this->ime."<br>";
    }
    public function godine(){
        $god=date("Y")-$this->godRodj;
        return $this->ime." ima godina: ".$god."<br>";
    }
    public function dodajIme($str){
        if($str=="")
            echo "Greska prilikom dodele imena<br>";
        else
            $this->ime=$str;
    }
    public function procitajIme(){
        return $this->ime;
    }
}
?>