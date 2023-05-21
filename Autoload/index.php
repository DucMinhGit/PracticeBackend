<?php

require "Functions.php";

$customer = new Customer("hcminh3003@gmail.com");

echo Email::send($customer);