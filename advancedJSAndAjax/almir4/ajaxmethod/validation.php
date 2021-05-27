<?php

    if(isset($_GET['name']) && isset($_GET['surname'])){
        $output['error'] = "";
        $output['data'] = "";
            if($_GET['name'] == "" && $_GET['surname'] == ""){
                $output['error'] = "All data required!";
            }else{
                $output['data'] = "Your data: " . $_GET['name'] . " " . $_GET['surname'];
            }
        echo json_encode($output, 256);
    }


    if(isset($_POST['name']) && isset($_POST['surname'])){
        $output['error'] = "";
        $output['data'] = "";
            if($_POST['name'] == "" && $_POST['surname'] == ""){
                $output['error'] = "All data required!";
            }else{
                $output['data'] = "Your data: " . $_POST['name'] . " " . $_POST['surname'];
            }
        echo json_encode($output, 256);
}

?>