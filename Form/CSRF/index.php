<?php

session_start();

require __DIR__ . './inc/header.php';

$errors = []; // for storing the error messages
$inputs = []; // for storing sanitized input values

$request_methods = strtoupper($_SERVER['REQUEST_METHOD']);

if($request_methods === 'GET') 
{
    //generate a token
    $_SESSION['token'] = bin2hex(random_bytes(35));

    //show the form
    require __DIR__ . './inc/get.php';
} 
else if($request_methods === 'POST') 
{
    // handle the form submission
    require __DIR__ . './inc/post.php';
    // re-display the form if the form contains errors
    if($errors)
    {
        require __DIR__ . './inc/get.php';
    }
}

require __DIR__ . './inc/footer.php';