<?php
$email_from = 'Upkeep Website <contact@upkeepsolar.com>';
$email_subject = "New Form Submission";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) ){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    if($name != "" && $email != "" && $phone !=""){

        $email_body = "User Name: $name.\n".
                    "User Email: $email.\n". 
                        "User Phone : $phone. \n".
                             "User Message: $message.\n";

            $to = "info@upkeepsolar.com";

            $headers = "From: $email_from \r\n";

            $headers .= "Reply-To: $email \r\n";

            mail($to, $email_subject, $email_body, $headers);

            
    }
    
}



// header("Location: index.php");

?>