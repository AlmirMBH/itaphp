<?php

require_once "FormHelper.php";

echo "<div style='text-align:center; color:blue; margin-top:30px'>
        <h2>Calculator</hs>
     </div>";

$operators = ['select operator', '+', '-', '*', '/'];
$form = new FormHelper("index.php?other_page=1", "GET");

echo "<div style='text-align:center'>";
    $form->openFormTag();
        $form->inputField('number', 'fOperand', 'Enter first operand');  echo "<br><br>";
        $form->inputField('number', 'sOperand', 'Enter second operand');  echo "<br><br>";
        $form->select($operators, 'operator', 0); echo "<br><br>";
        $form->inputField('submit','button','Calculate');
    $form->closeFormTag();
echo "</div>";

// Browser output
if(isset($_GET['result'])){
    if(is_numeric($_GET['result'])){
        echo "<div style='background-color:green; color:white; margin:20px; padding:5px; text-align:center'>
                The result of your operation is: " . $_GET['result'] . 
             "</div>";
    }else{
        echo "<div style='background-color:red; color:white; margin:20px; padding:5px; text-align:center'>"
                . $_GET['result'] . 
             "</div>";
    }
}
?>


