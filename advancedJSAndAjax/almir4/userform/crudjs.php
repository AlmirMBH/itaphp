<?php 

if(isset($_GET['action'])){
    if($_GET['action'] == "select"){
        $db = mysqli_connect("localhost", "root", "", "final_project_oopphp"); 
        mysqli_query($db, "SET NAMES utf-8");
        $query = "SELECT * FROM users ORDER BY id ASC";
        $users = mysqli_query($db, $query);
        $output = mysqli_fetch_all($users, MYSQLI_ASSOC);
        echo json_encode($output, 256);
    }        
}
        
    
if(isset($_GET['action']) && isset($_POST['name']) && isset($_POST['email']) 
    && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role']) && isset($_POST['status'])){           
    
    $db = mysqli_connect("localhost", "root", "", "final_project_oopphp"); 
    if(isset($_POST['id']) && $_GET['action'] == "update"){
        $sql = "UPDATE users SET name='{$_POST['name']}', email='{$_POST['email']}', username='{$_POST['username']}', password='{$_POST['password']}', role='{$_POST['role']}', status='{$_POST['status']}' WHERE id='{$_POST['id']}'";
        mysqli_query($db, $sql);
        if(mysqli_error($db)){
            echo "Connection error!<br>" . mysqli_error($db);
        }else{
            echo "User {$_POST['name']} has been updated.";
        }
    }elseif($_GET['action'] == "insert"){              
        $sql = "INSERT INTO users(name, email, username, password, role, status) VALUES('{$_POST['name']}', '{$_POST['email']}', '{$_POST['username']}', '{$_POST['password']}', '{$_POST['role']}', '{$_POST['status']}')";
        mysqli_query($db, $sql);
            if(mysqli_error($db)){
                echo "Connection error!<br>" . mysqli_error($db);
            }else{
                echo "User {$_POST['name']} has been added.";
            }
    }
}

if(isset($_GET['action']) && isset($_POST['id'])){
    $db = mysqli_connect("localhost", "root", "", "final_project_oopphp");     
        if($_GET['action'] == "delete"){
            $sql = "DELETE FROM users WHERE id='{$_POST['id']}'";
                mysqli_query($db, $sql);
                if(mysqli_error($db)){
                    echo "Connection error!<br>" . mysqli_error($db);
                }else{
                    echo "User {$_POST['name']} has been deleted.";
                }
        }
}
    



?>