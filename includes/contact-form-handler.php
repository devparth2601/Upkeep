<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$email_from = 'upkeepsolar@gmail.com';
$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
                    "User Email: $email.\n". 
                        "User Phone : $phone. \n".
                             "User Message: $message.\n";

$to = "info@upkeepsolar.com";

$headers = "From: $email from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: index.php");

?>