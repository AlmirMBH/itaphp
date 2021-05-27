<?php
    
    // used for getmethod.php
    if(isset($_GET['name']) && isset($_GET['surname'])){
        $name = $_GET['name'];
        $surname = $_GET['surname'];

        if($name == "Almir" && $surname == "Mustafic"){
            echo "{$name} {$surname} you are logged in.";
        }else{
            echo "Invalid data!";
        }
    }
    
    // used for postmethod.php
    if(isset($_POST['name']) && isset($_POST['surname'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];

        if($name == "Almir" && $surname == "Mustafic"){
            echo "{$name} {$surname} you are logged in.";
        }else{
            echo "Invalid data!";
        }
    }

    // used for getpostmethod.php
    if(isset($_GET['operation']) && isset($_POST['op1']) && isset($_POST['op2'])){
        $operation = $_GET['operation'];
        $op1 = (int)$_POST['op1'];
        $op2 = (int)$_POST['op2'];        

            if($operation == "Add"){
                $result = $op1 + $op2;                
                echo $result;
            }elseif($operation == "Subtract"){
                $result = $op1 - $op2;
                echo $result;
            }elseif($operation == "Multiply"){
                $result = $op1 * $op2;
                echo $result;
            }elseif($operation == "Divide"){
                $result = $op1 / $op2;
                echo $result;
            }else{
                echo "All data required!";
            }
    }

    
    if(isset($_GET['op']) && isset($_POST['operand1']) && isset($_POST['operand2'])){
        $operation = $_GET['op'];
        $op1 = $_POST['operand1'];
        $op2 = $_POST['operand2'];
        
        $output['error'] = "You have not selected operation!";
        $output['data'] = "";

            if($operation == "Add"){
                $output['error'] = "";
                $output['data'] = $op1 + $op2;
            }elseif($operation == "Subtract"){
                $output['error'] = "";
                $output['data'] = $op1 - $op2;
            }elseif($operation == "Multiply"){
                $output['error'] = "";
                $output['data'] = $op1 * $op2;
            }elseif($operation == "Divide"){
                if($op2 == 0){
                    $output['error'] = "You cannot divide with 0!";
                    $output['data'] = "";
                }else{
                    $output['error'] = "";
                    $output['data'] = $op1 / $op2;
                }                
            }
    }

    echo json_encode($output, 256);

?>