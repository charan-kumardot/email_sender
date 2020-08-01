<?php

$name = $_POST['name'];

$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'gokuladharshinis@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name. \n". 
               "User Email: $visitor_email.\n".
               "User Message: $message. \n";

$to = "charanrio08@gmail.com";

$headers = "From: $email from \r\n";

$headers .= "Reply-To: $visitor email r\n";

mail($to, $email_subject, $email_body, Sheaders);

header ("Location: index.html");

?>