<?php 
        $db = mysqli_connect("localhost", "root", "", "final_project_oopphp"); 
        mysqli_query($db, "SET NAMES utf-8");
        $query = "SELECT * FROM users ORDER BY id ASC";
        $users = mysqli_query($db, $query);
        $output = mysqli_fetch_all($users, MYSQLI_ASSOC);
        echo json_encode($output, 256);
    
    if(isset($_GET['action']) && isset($_POST['name']) && isset($_POST['email']) 
        && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role']) && isset($_POST['status'])){           
            
        $action = $_GET['action'];        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $status = $_POST['status'];

        if(isset($_POST['id']) && $action == "update"){            
            $sql = "UPDATE users SET name='{$name}', email='{$email}', username='{$username}', password='{$password}', role='{$role}', status='{$status}' WHERE id='{$_POST['id']}'";
        }elseif($action == "insert"){              
            $sql = "INSERT INTO users(name, email, username, password, role, status) VALUES('{$name}', '{$email}', '{$username}', '{$password}', '{$role}', '{$status}')";            
        }
                   
        mysqli_query($db, $sql);
    }

    



?>