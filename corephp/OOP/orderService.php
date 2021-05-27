<?php

class Order{
    public $id;
    public $name;
    public $product;
    public $color;
}

class Test{

    public function laptop($apiData){
        $order = new Order();
        $order->id = $apiData[0]; // 24
        $order->name = $apiData[1]; // mobile
        $order->product = $apiData[2]; // Almir

        foreach($apiData['metaData'] as $color){
            $colors[] = $color;
        }

        $order->color = $colors;
        return $order;
        }
    
}

// model array-a slicno kao i sa API-ja
$apiData = array(24, 'Almir', 'mobile', 'metaData'=>array('white', 'blue', 'green')); 

$test = new Test();
$createdObject = $test->laptop($apiData);

echo "ID: " . $createdObject->id . "<br>";
echo "Name: " . $createdObject->name . "<br>";
echo "Product: " . $createdObject->product . "<br>";
$colors = $createdObject->color;

for($i=0; $i<count($colors); $i++){    
    echo "Color {$i}: " . $colors[$i] . "<br>";    
} 



