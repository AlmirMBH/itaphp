<?php
class Osoba{
    protected $ime;
    protected $prezime;
    protected $godRodj;
    public function godine(){
        return "Broj godina: ".(date("Y")-$this->godRodj)."<br>";
    }
}

class Student extends Osoba{
    protected $skola;
    protected $brIndeksa;
    public function __construct($a, $b, $c, $d, $e){
        $this->ime=$a;
        $this->prezime=$b;
        $this->godRodj=$c;
        $this->skola=$d;
        $this->brIndeksa=$e;
    }
    public function __toString(){
        return "{$this->ime} {$this->prezime} ({$this->skola} - {$this->brIndeksa})<br>".$this->godine()."<br>";
    }
}

class Radnik extends Osoba{
    protected $firma;
    protected $pozicija;
    public function __construct($a, $b, $c, $d, $e){
        $this->ime=$a;
        $this->prezime=$b;
        $this->godRodj=$c;
        $this->firma=$d;
        $this->pozicija=$e;
    }
    public function __toString(){
        return "{$this->ime} {$this->prezime} ({$this->firma})<br>";
    }
}

class Rukovodilac extends Radnik{
    protected $odeljenje;
    public function __construct($a, $b, $c, $d, $e, $f){
        $this->ime=$a;
        $this->prezime=$b;
        $this->godRodj=$c;
        $this->firma=$d;
        $this->pozicija=$e;
        $this->odeljenje=$f;
    }
    public function __toString(){
        return "{$this->ime} {$this->prezime} ({$this->firma} - Rukovodi: {$this->odeljenje})<br>";
    }
}
?>