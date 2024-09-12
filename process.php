<?php ob_start();
	if(isset($_POST['submit'])) {
	$to = "edwin@codingfaculty.com";
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: " .$email . "\r\n";
	mail($to,$subject,$message,$headers);
	header("Location: contact.html");
	}
?>