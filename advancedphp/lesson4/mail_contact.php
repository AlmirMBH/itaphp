<form action="mail_contact.php" method="POST">
    <label> Subject: </label>
    <input name="subject" type="text"> <br><br>
	<label> Message: </label><br><br>
    <textarea rows="5" cols="40" name="message"></textarea><br><br>
	<label> You're mail: </label>
    <input name="email" type="text"> <br><br>
    <input type="submit" name="submit" value="Submit">
</form>


<?php

if(isset($_POST['subject']) && isset($_POST['message'])&& isset($_POST['email'])) {
	
	if (isset($_POST['subject']) && $_POST['subject'] != "") {
	
		$_POST['subject'] = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
	
		if ($_POST['subject'] == "") { 
		  echo "<p> Not a valid subject!</p>";
           return;
		}
		
		else {
			 $subject = $_POST['subject'];
		}
	
	}else {
        echo "<p> Please insert subject </p><br>";
        return;
    }
	
   
	 if (isset($_POST['message']) && $_POST['message'] != "") {
        $_POST['message'] = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        if ($_POST['message'] == "") {
             echo "<p>Not a valid message!</p>";
            return;
        } else {
            $message = $_POST['message'];
        }
    } else {
        echo "<p>Message field is empty</p>";
        return;
    }


 if (isset($_POST['email']) && $_POST['email'] != "") {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Not a valid email adress</p>";
            return;
        } else {
            $email = $_POST['email'];
        }
    } else {
    echo "<p> Email field is empty </p>";
        return;
    }


    $message.= " // User email is: " . $email;
 

$to = "client-email@barn.com";
$headers = "bcc:support@barn.com";
$send_mail = mail($to,$subject,$message,$headers);  

if($send_mail === false) {
        die('There was an error sending email, please try again');
    }
    else {
        echo "Thank you!";
    }
}

?>