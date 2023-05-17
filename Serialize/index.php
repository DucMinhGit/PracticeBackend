<?php

require_once 'Customer.php';

$customer = new Customer(10, 'John Doe', 'john.doe@example.com');

$str = serialize($customer);

file_put_contents('customer.txt', $str);