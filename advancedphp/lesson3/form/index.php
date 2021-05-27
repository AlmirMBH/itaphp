<form action="index.php" method="POST">
	<label> User: </label>
    <input name="input1" type="text"> <br><br>
    <textarea rows="5" cols="40" name="input2"> Insert your comment.. </textarea> <br><br>
    <input type="submit" name="submit" value="Submit">
</form>


<?php

$dir = "data/mydata.txt";

if(isset($_POST['input1']) && isset($_POST['input2'])) {
	$data = $_POST['input1'] . "-" . $_POST['input2'] . "\r\n";
	$write = file_put_contents($dir,$data,FILE_APPEND);
	
	if($write === false) {
		die("There was an error writing this file, please try again");
	}
	else {
		echo "Thank you";
	}
}



?>