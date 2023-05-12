<?php

require_once "./Comparator.php";

$customers = [
    ['id' => 1, 'name' => 'John', 'credit' => 20000],
    ['id' => 3, 'name' => 'Alice', 'credit' => 10000],
    ['id' => 2, 'name' => 'Bob', 'credit' => 15000]
];

// sort customers by names
usort($customers, new Comparator('name'));
print_r($customers);

// sort customers by credit
usort($customers, new Comparator('credit'));
print_r($customers);