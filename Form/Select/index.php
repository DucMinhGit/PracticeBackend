<?php

require __DIR__ . './inc/header.php';

$request_methods = $_SERVER['REQUEST_METHOD'];

if($request_methods === 'GET')
{
    require __DIR__ . './inc/get.php';
}
else {
    require __DIR__ . './inc/post.php';
}

require __DIR__ . './inc/footer.php';