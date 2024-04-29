<?php
// the message
$name = $_POST['name'];
$message = $_POST['message'];
$email = $_POST['email'];

$msg = '<b>Name:</b> '.$name.'<br/><b>Email:</b>'.$email.'<br/><b>Message:</b>'.$message;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("marston.cord@gmail.com","CordMarston.com - Contact Form",$msg);
?>