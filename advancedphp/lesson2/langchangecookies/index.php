<a href="index.php?language=en"><img src="images/english.jpg"></a>
<a href="index.php?language=de"><img src="images/german.jpg"></a> <br><br>

<?php

$messages = array (

"en" => "Welcome",
"de" => "Willkommen"

);

$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : "en";

if(isset($_GET['language'])) {
	
	$language = $_GET['language'];
	
	setcookie("language",$language,time()+(86400*30));
	
}

echo $messages[$language];


?>