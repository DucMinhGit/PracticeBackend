<?php

// require 'Customer.php';
require_once 'FileReader.php';

// // serialize the customer object
// $customer1 = new Customer(10, 'John Doe', 'john.doe@example.com');
// $str = serialize($customer1);
// file_put_contents('customer.txt', $str);

// // unserialize it
// $str = file_get_contents('customer.txt');
// $customer2 = unserialize($str);

// // these object are not the same
// var_dump($customer1 === $customer2); //false

$fileName = "objects.dat";

file_put_contents($fileName, serialize(new FileReader()));

$file_reader = unserialize(file_get_contents($fileName));

echo $file_reader->read();

$file_reader->close();
