<?php 

require_once "index.php";

class FormHelper{

    public $action = "";
    public $method = "POST";

    public function __construct($action, $method) {
        $this->method = $method;
        $this->action = $action;
    }


function openFormTag(){
    echo "<form action='{$this->action}' method='{$this->method}'>";
}


public function closeFormTag(){
    echo "</form>";
}


public function inputField($type, $name, $placeholder){
	echo "<input type='{$type}' name = '{$name}' placeholder='{$placeholder}'>";
}


function select($operators, $selectName, $selectedOperator){
    echo"<select name='{$selectName}' style='width:175px'>";
        foreach ($operators as $operatorsKey => $operatorValue) {        
            echo "<option value='{$operatorsKey}'";        
            if($selectedOperator == $operatorsKey) {
                echo " selected ";
            }        
            echo "> {$operatorValue} </option>";        
        }
        echo"</select>";
    }   
}


// Mathematical operations
if (isset($_GET['fOperand']) && isset($_GET['sOperand']) && isset($_GET['operator'])){
    
    $fOperand = $_GET['fOperand'];
    $sOperand = $_GET['sOperand'];
    $operator = $_GET['operator'];

    if($operator == 1){
        $result = $fOperand + $sOperand;
        header ("Location: index.php?result=". $result);
    }elseif($operator == 2){
        $result = $fOperand - $sOperand;
        header ("Location: index.php?result=". $result);
    }elseif($operator == 3){
        $result = $fOperand * $sOperand;
        header ("Location: index.php?result=". $result);
}elseif($operator == 4){
        if($sOperand == 0){
            $result = "Division with 0 is not allowed";
            header ("Location: index.php?result=". $result);
    }else{
        $result = $fOperand / $sOperand;
        header ("Location: index.php?result=". $result);        
    }   
}
else{

    $result = "You have to enter both operands and select one operator.";
    header ("Location: index.php?result=". $result);
    
}

}

