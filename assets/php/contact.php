<?php 

ini_set('SMTP', "smtp.gmail.com");
ini_set('smtp_port', "465");
ini_set('sendmail_from', "hugogspereira@gmail.com");

    $to = "hugogspereira@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['body'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['body'];

    //Headers
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    $headers1 = $headers;
    $headers1 .= "From: " . $from . "\r\n";

    $retval = mail($to,$subject,$message,$headers1);
    
    if($retval == true) {
        echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
    else {
        echo "Message could not be sent... Try to contact " . $first_name . " directly via email :)";
    }

?>