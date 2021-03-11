<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message_from = $_POST['message'];

    $email_from = 'ikakarim9@gmail.com';

    $email_subject = "New Form Submission!";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "playrayzpsplus@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    $mail($to,$email_subject,$email_body,$headers);
    header("Location: contact-us.html");
?>