<?php

$headers[] = 'From: ContactUsForm@portfolio.com';
if (isset($_POST['name']) && isset($_POST['email'])) {
    $toAddress = "NSR <mimi@dijatek.com>";
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if (isset($_POST['msg'])) {
        $comments = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);
    } else {
        $comments = "No Message";
    }

    // The message
    $message .= "Name: $name \r\n";
    $message .= "Email: $email \r\n";       
    $message .= "Message: $comments \r\n";

    // In case any of our lines are larger than 70 characters, we should use wordwrap()
    $message = wordwrap($message, 70, "\r\n");

    // Set the subject
    $mySubject = "Contact Us Form Submission from $email";
    // Send
    try {
        mail($toAddress,$mySubject, $message, implode("\r\n", $headers));
        echo true;
    } catch (Exception $e) {
        error_log("Exception $e");
        echo false;
    }
} else {
    echo false;
}