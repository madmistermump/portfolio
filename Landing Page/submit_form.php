<?php
 //Check if form data is submitted via POST
if ($_SERVER[REQUEST_METHOD] == POST) {
     //Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Validate data (example)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo Invalid email format;
        exit;
    }

    //Example action Send an email
    $to = yourcompany@example.com;
    $subject = New Message from Contact Form;
    $body = Name $namenEmail $emailnMessage $message;
    $headers = From $email;
    
    if (mail($to, $subject, $body, $headers)) {
        echo Message sent successfully!;
    } else {
        echo Failed to send message.;
    }
} else {
    echo Invalid request.;
}
?/

