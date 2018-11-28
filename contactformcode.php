<?php
if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$company = $_POST['company'];
	$tel = $_POST['tel'];
	$emailFrom = $_POST['email'];
	$message = $_POST['message'];
	
	$to= "YOUR EMAIL HERE";
	$email_subject = "New Form submission";
	$email_body = "You have recieved an email from ".$name.".\n\n". 
		"Company Name:" .$company.".\n\n".
		"Phone Number:".$tel.".\n\n".$message;
	$headers = "From: ".$emailFrom;
	
	mail($to,$email_subject,$email_body,$headers);
	header('Location: thankyou.html'); 
}

?> 