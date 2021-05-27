<?php

class Database{

    protected $location;
    protected $username;
    protected $password;
    protected $database;
    protected $db;

    public function __construct(){
        $this->location = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "image_gallery";           
    }

    public function connect(){
        $this->db=@mysqli_connect($this->location, $this->username, $this->password, $this->database);
        if(!$this->db) return false;        
        return $this->db;
    }

    public function query($query){
        return mysqli_query($this->db, $query);
    }

    public function fetchAssoc($data){
        return mysqli_fetch_assoc($data);

    }

    public function fetchAll($data){
        return mysqli_fetch_all($data, MYSQLI_ASSOC);

    }

    public function fetchObject($data){
        return mysqli_fetch_object($data);

    }

    public function error(){
        return mysqli_error($this->db);
    }

    public function errno(){
        return mysqli_errno($this->db);
    }
}

$db = new Database();

if(!$db->connect()){
    echo "DB connection error!";
    exit;
}


if(isset($_GET['action'])){
    $action = $_GET['action'];

    if($action == 'store'){       
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $query = "INSERT INTO galleries (name, comment) VALUES('{$name}', '{$comment}')";
        $result = $db->query($query);
            if($db->error()){
                echo $db->error() . "" . $db->errno();
            }else{
                echo "Your gallery has been created!";
            }
    }elseif($action == 'select'){        
        $query = "SELECT * FROM galleries";
        $rawData = $db->query($query);
        $galleries = $db->fetchAll($rawData);

        echo json_encode($galleries, 256);
            if($db->error()){
                echo $db->error() . "" . $db->errno();
            }
    }

}