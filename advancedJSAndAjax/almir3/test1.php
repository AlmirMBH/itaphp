<?php     
    $arr = [1, 5, 3, 2, 8, 5];
    $assoc = ['name' =>'Almir', 'surname' => 'Mustafić'];
    
    $json = json_encode($arr);
    $jsonAssoc = json_encode($assoc, 256); // param 256 = utf-8

    $jsonObject = json_decode($jsonAssoc);

    echo "Json array: " . $json . "<br> Json associative array: " . $jsonAssoc . "<br> Json object: " . $jsonObject->name . " " . $jsonObject->surname;

?>