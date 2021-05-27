<?php

if(isset($_POST['name']) && isset($_FILES['image'])){
        $name = $_POST['name'];        
        $imageTmp = $_FILES['image']['tmp_name'];
        $imageOrig = $_FILES['image']['name'];
        $output['error'] = "";
        $output['data'] = "Your data<br>Name: " . $name . "<br>Image tmp: " . $imageTmp . "<br>Image orig: " . $imageOrig;
        
            if(!@move_uploaded_file($imageTmp, "../img/" . $imageOrig)){
                $output['error'] = "Image has not been uploaded!";
            }else{
                $output['data'] = $imageOrig;
            }
        echo json_encode($output, 256);
}


if(isset($_POST['imageName'])){
    if(!file_exists("../img/{$_POST['imageName']}")){
        echo "No such image!\n";
    }
     if(!unlink("../img/{$_POST['imageName']}")){
        echo $_POST['imageName'] . " has not been deleted!";
     }else{
        echo $_POST['imageName'] . " has been deleted!";
     }
     
}

?>