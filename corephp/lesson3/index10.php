<?php
$spisak=array('+', '-', '*', '/', '%');
$operacija=$spisak[mt_rand(0, 4)];$op1=mt_rand(0, 50);$op2=mt_rand(0, 50);
echo "op1=$op1, op2=$op2, operacija=$operacija<hr>";
switch($operacija)
{
    case '+':
        echo "Zbir je: ".($op1+$op2)."<br>";
    break;
    case '*':
        echo "Proizvod je: ".($op1*$op2)."<br>";
    break;
    case '-':
        echo "Razlika je: ".($op1-$op2)."<br>";
    break;
    case '/':
        if($op2!=0)
            echo "Kolicnik je: ".($op1/$op2)."<br>";
        else
            echo "Nedozvoljeno deljenje nulom!!!!!<br>";
    break;
    case '%':
        echo "Ostatak je: ".($op1%$op2)."<br>";
    break;
}

echo "<hr>";
$x=null;
$y=12;
$z=$x??$y;
echo "$z" . "<br>";



// if a variable is static, the result is 11, 12, 13
// otherwise the result is 11, 11, 11
function incrementFunc(){
    static $x = 10;
    echo ++$x . "<br>";
}
incrementFunc();
incrementFunc();
incrementFunc();

// everyhthing about your computer and server
foreach ($_SERVER as $var => $value){
    echo $var . ":" . $value . '<br />';
}

echo "<hr>";

printf('Your IP address is: %s ', $_SERVER['REMOTE_ADDR'] );

echo "<hr>";
?>

<?php
function addition($num1=3,$num2=4) {return $num1 + $num2; }
echo "Result is: " . addition();



echo "<hr>";

$arr2 = array(1,2,3);
$arr3= array(5,4,3,1);

$arr1=array();
$arr1=array_diff($arr3, $arr2);

var_dump($arr1);

echo "<hr>";

$arr = array("Serbia" => "Belgrade", "France" => "Paris"); 
$arr[3];


?>

