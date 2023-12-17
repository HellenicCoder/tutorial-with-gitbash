<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n"
               "Subject: $subject.\n"
               "User Message: $message.\n";
$to = 'nebguiyahya26@gmail.com';

$header = "From: $email_from \r\n

$header .= "reply-To: $visitor_email \r\n

mail($to, $email_subject, $email_body, $header);

header("locatio:Contact.html")





?>