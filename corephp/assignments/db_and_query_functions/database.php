<?php

function db_connect(){

    static $connection; // prevents multiple DB connections
    
    if(!isset($connection)){
        $serverName = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'corephp';
        $connection = mysqli_connect($serverName, $username, $password, $dbname); 
    }
    
    if($connection === false){
        return mysqli_connect_errno() . "<br>" . mysqli_connect_error($connection);
    }else{
        return $connection;
    }
}









?>