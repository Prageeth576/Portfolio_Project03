<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'ygprageethchamara2002@gmail.com';
$email_subject = 'New Form Submission';

$email_body = "User name: $name.\n" .
    "User email: $visitor_email.\n" .
    "subject: $subject.\n" .
    "User message: $message.\n";

$to = 'prageethchamara960@gmail.com';

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")

?>