<!-- <?php ob_start();
	if(isset($_POST['submit'])) {
	$to = "infantjose2609@gmail.com";
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
?> -->

<?php
ob_start();
 
if (isset($_POST['submit'])) {
    $to = "infantjose2609@gmail.com";
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message']);  // Sanitize the message input
 
    if (!$email) {
        echo "Invalid email format";
        exit;  // Stop the script if the email is not valid
    }
 
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: " . $email . "\r\n";
 
    // Check if the mail was sent successfully
    if (mail($to, $subject, $message, $headers)) {
        // If mail is sent, redirect to the contact page
        header("Location: contact.html");
        exit();
    } else {
        // If the mail fails, print an error message
        echo "Message could not be sent. Please try again later.";
    }
}
?>
<?php
ob_start();
 
if (isset($_POST['submit'])) {
    $to = "infantjose2609@gmail.com";
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message']);  // Sanitize the message input
 
    if (!$email) {
        echo "Invalid email format";
        exit;  // Stop the script if the email is not valid
    }
 
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: " . $email . "\r\n";
 
    // Check if the mail was sent successfully
    if (mail($to, $subject, $message, $headers)) {
        // If mail is sent, redirect to the contact page
        header("Location: contact.html");
        exit();
    } else {
        // If the mail fails, print an error message
        echo "Message could not be sent. Please try again later.";
    }
}
?>