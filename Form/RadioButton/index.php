<?php

require __DIR__ . './inc/header.php';

$contacts = [
    'email' => 'Email',
    'phone' => 'Phone'
];

$errors = [];

$request_methods = $_SERVER['REQUEST_METHOD'];

if($request_methods === 'GET')
{
    require __DIR__ . './inc/get.php';
}
else if($request_methods === 'POST'){
    require __DIR__ . './inc/post.php';
}

require __DIR__ . './inc/footer.php';