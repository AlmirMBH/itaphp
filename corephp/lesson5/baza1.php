<?php

function db_connect(){
    static $connection;
        if(!isset($connection)){
            $host = 'localhost';
            $username = "root";
            $password = "";
            $database = "corephp";
            $connection = mysqli_connect($host, $username, $password, $database);
        }
        if($connection === false){
            echo "Connection failed";
        }
    return $connection;
}


function db_query($query){
    $connection = db_connect();
    $result = mysqli_query($connection, $query);
    return $result;
}


function db_select($query){
    $rows = array();
    $result = db_query($query);
        if($result === false){
            return false;
        }
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
    return $rows;
}

// ======================== SEND QUERY ==============================
$rows = db_select("SELECT * FROM phones");
if($rows === false){
    die("Error");
}else{
    foreach($rows as $row){
        foreach($row as $key => $value){
            echo $key . ": " . $value . "<br>";
        }
        echo "----------------------------------<br>";
    }
    
}









?>