<?php

// require_once "src/Model/Customer.php";
// require_once "src/Model/Product.php";
// use Store\Model\{Customer, Product};

// $customer = new Customer("Bob");
// echo $customer->getName();

// $product = new Product();

require "src\Database\Logger.php";
require "src\Utils\Logger.php";
require "src\GlobalClass\Message.php";

use Store\Database\Logger;
use Store\Utils\Logger as UtilsLogger;

$logger = [
    new Logger(),
    new UtilsLogger()
];

$mess = new \Message();
$mess->show('Hello world');