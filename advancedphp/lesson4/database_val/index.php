<form action="index.php" method="post">
<input type="text" name="user">
<input type="text" name="password">
<input type="submit" value="Login">
</form>



<?php

$conn = mysqli_connect("localhost","root","","my_database");

if(isset($_POST['user'])&& isset($_POST['password'])){

$user = $_POST['user'];
$password = $_POST['password'];

//ovo obrisi

$user = mysqli_real_escape_string($conn,$user);
$password = mysqli_real_escape_string($conn,$password);


$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' and password='$password'");

if(mysqli_num_rows($result)>0){
	echo "Valid user";
}
else {
	echo "Invalid user";
}


}

?>