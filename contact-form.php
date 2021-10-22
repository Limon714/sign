<?php
$name = $_POST['name'];
$visitor_email = $_POST ['email'];
$message = $_POST['message'];

$email_form = 'limonbabu165@gmail.com';
$email_subject = "New form Submission";

$email_body = "User name: $name.\n"."User Email: $visitor_email.\n". " User Message: $message.\n";

$to = "limon4u714@gmail.com";

$headers = "From: $email_form \r\n";

$headers .= "Reply to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");
?>