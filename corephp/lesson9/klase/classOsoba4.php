<?php
class Osoba{
    protected $ime;
    protected $imeOca;
    protected $prezime;
    protected $godRodj;
    protected $jmbg;
    public function godine(){
        $god=date("Y")-$this->godRodj;
        return $this->ime." ima godina: ".$god."<br>";
    }
    public function __get($name){
        return $this->$name;
    }
    public function __set($name, $value){
        $this->$name=$value;
    }
    public function __construct($a, $b, $c, $d, $e){
        echo "Objekat kreiran<br>";
        $this->ime=$a;
        $this->imeOca=$b;
        $this->prezime=$c;
        $this->godRodj=$d;
        $this->jmbg=$e;
    }
    public function __destruct(){
        echo "Objekat unisten<br>";
    }
    public function __toString(){
        return "{$this->ime} ({$this->imeOca}) {$this->prezime}<br>";
    }
}
?>