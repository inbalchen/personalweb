<?php


if(isset($_POST['submit'])) {
	$to = "inbalchenz@gmail.com";
	$subject = "Form Tutorial";
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email_field = $_POST['email'];
	$message = $_POST['msg'];
	$fnameErr = $emailErr = $lnameErr = $messageErr = "";

	
	$headers = "From: ".$firstname."\n"."E-Mail:".$email_field."\n". "Message: "."\n\n".$message;
 
	if(mail($to, $subject, $headers)) {
		echo "<h1>sucsses!</h1>";

	} else {
	 	// echo "<h1>somthing went wrong! go back and try to send again</h1>";
	}
	
  	
 
	
}

?>