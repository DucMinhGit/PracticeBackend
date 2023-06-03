<?php

session_start();

require __DIR__ . './inc/header.php';

require __DIR__ . './inc/functions.php';

$pizza_toppings = [
	"pepperoni" => 0.5,
	'mushrooms' => 1,
	'onions' => 1.5,
	'sausage' => 2.5,
	'bacon' => 1.0,
];

$request_method = $_SERVER['REQUEST_METHOD'];

if($request_method === 'GET')
{
    require __DIR__ . './inc/get.php';
}
else if($request_method === 'POST') {
    require __DIR__ . './inc/post.php';
}

require __DIR__ . './inc/footer.php';
