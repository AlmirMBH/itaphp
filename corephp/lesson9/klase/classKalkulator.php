<?php
class Kalkulator{
    private $op1;
    private $op2;
    public function __construct($a, $b){
        $this->op1=$a;
        $this->op2=$b;
    }
    public function sabiranje(){
        return $this->op1+$this->op2;
    }
    public function oduzimanje(){
        return $this->op1-$this->op2;
    }
    public function mnozenje(){
        return $this->op1*$this->op2;
    }
    public function deljenje(){
        if($this->op2==0)
            return "Nedozvoljeno deljenje nulom";
        else
            return $this->op1/$this->op2;
    }
    public function ostatak(){
        if($this->op2==0)
            return "Nedozvoljen moduo sa nulom";
        else
            return $this->op1%$this->op2;
    }
}
?>