<?php
$name = $_post["name"];
$visitor_email = $_post["email"];
$subject = $_post["subject"];
$message = $_post["message"];

$email_from = "info@travelwaves.com";

$email_subject ="New Form Submission";

$email_body ="User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "subject: $name.\n".
                "User Message: $message.\n".;

 $to =  "chebemnzomblack@gmail.com";
 
 $headers = "from: $email_from \r\n";

 $headers .= "reply-To: $visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);

 header("location:contact.html");



?>