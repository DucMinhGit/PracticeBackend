<?php

$honeyPot = filter_input(INPUT_POST, 'nickname', FILTER_SANITIZE_STRING);
if ($honeyPot) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
    exit;
}

// Validate name
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$inputs['name'] = $name;
if (!$name || trim($name) === '') {
    $errors['name'] = "Please enter your name";
}

// Validate email
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$inputs['email'] = $email;
if ($email) {
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$email) {
        $errors['email'] = 'Please enter a valid email';
    }
} else {
    $errors['email'] = 'Please enter an email';
}

// Validate subject
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$inputs['subject'] = $subject;
if (!$subject || trim($subject) === '') {
    $errors['subject'] = 'Please enter the subject';
}

// Validate message
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
$inputs['message'] = $message;
if (!$message || trim($message) === '') {
    $errors['message'] = 'Please enter the message';
}
