<?php
class Osoba{
    protected $ime;
    protected $prezime;
    protected $godRodj;
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
}
?>