<?php 

echo "Hi <br>";
$arr2 = array(1,2,3);
$arr3= array(5,4,3,1);

$arr1=array();
$arr1=array_diff($arr3, $arr2);
//var_dump($arr1);
echo "<hr>";

$arr4 = array('name' => 'Almir', 'surname' => 'Mustafic', 'city' => 'Sarajevo');
//print_r(ksort($arr2));

$arr100 = array(5,7,3,4,4);
array_flip($arr100);
print_r($arr100);
echo "THIS";

echo "<hr>";

$city[0] = "Belgrade";
$city[1] = "New York";
$city[2] = "Los Angeles";
krsort($city);
print_r($city);
echo "<hr>";

$testarray = array("red", "green", "blue", "pink" );
$subArray = array_slice( $testarray, 1, 2 );
print_r($subArray);
echo "<hr>";

$array1 = array("red", "blue" );
$array2 = array("green", "yellow" );
$bigArray = array_merge( $array1, $array2 );
print_r($bigArray);
echo "<hr>";

$someWords = "Please don't blow me to pieces."; 
 
$wordChunks = explode(" ", $someWords);
for($i = 0; $i < count($wordChunks); $i++){
    echo "Piece $i = $wordChunks[$i] <br />";
}
echo "<hr>";

$words = array("Please", "don't", "blow", "me", "to", "pieces.");
$str = implode(" ", $words);
echo $str;
echo "<hr>";

$a=array("a"=>"BMW","b"=>"Audi","c"=>"BMW");
print_r(array_unique($a));
echo "<hr>";

$a=array_fill(0,100,"hello");
print_r($a);
echo "<hr>";

$capitals = array("Belgrade", "Paris", "London");
list($Serbia, $France, $England) = $capitals;
echo $France;
echo "<hr>";

$arr = array("Serbia" => "Belgrade", "France" => "Paris");
$arrFlip = array_flip($arr);
print_r($arrFlip);
echo "<hr>";

$arr99=array(array());
print_r($arr99);
echo "<hr>";

$arr=array(array(array(1)));
echo $arr[0][0][0]; 
echo "<hr>";

$arrA=array("a"=>array(1,2,3,4,5,6,7,8),"b"=>array(1,2,3,4,5,6,7,8));
array_pop($arrA);
echo $arrA;


echo $arr["a"][3];
echo "<hr>";









?>
