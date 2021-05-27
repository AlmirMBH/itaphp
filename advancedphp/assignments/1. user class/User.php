<?php

class User{

    protected $id;
    protected $first_name;
    protected $last_name;
    protected $age;

    public function __construct($id, $first_name, $last_name, $age){
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }


    public function getNameAndSurname(){
        return $this->first_name . ' ' . $this->last_name;
    }


    public function getId(){
        return $this->id;
    }


    public function isAdult($age){
        if($age > 17){
            return true;
        }
    }

}

$id = 1;
$first_name = 'Almir';
$last_name = 'Mustafic';
$age = 41;

    $user = new User($id, $first_name, $last_name, $age);

        if($user->isAdult($age)){
            
            echo "{$user->getNameAndSurname()} is adult";
        }else{
            echo "{$user->getNameAndSurname()} is not adult";
        }


