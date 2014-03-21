<?php
session_start();
$to      = $_SESSION['email'];
$subject = 'Forgot Mail';
$message = 'Your Login Imformation   Password:  $_SESSION[password]';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
    $_SESSION['signerror']="Please check your mail";	 
	header("location: index.php");
	exit;
	
?>