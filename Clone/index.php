<?php

require_once "Person.php";

$bob= new Person("bob");

$bob->address->street = "Son Tra";
$bob->address->city = "Da Nang";

echo "<pre>";
var_dump($bob);
echo "</pre>";


function deep_clone($object)
{
    return unserialize(serialize($object));
}

$alex = deep_clone($bob);

$alex->name = "Alex";
$alex->address->street = "Quan Thu Thiem";
$alex->address->city = "Ho Chi Minh";

echo "<pre>";
var_dump($alex);
echo "</pre>";

echo "<pre>";
var_dump($bob);
echo "</pre>";


// $alex = clone $bob;
// $alex->name = 'Alex';

// echo "<pre>";
// var_dump($alex);
// echo "</pre>";

// $alex->address->street = "Quan Thu Thiem";
// $alex->address->city = "Ho Chi Minh";

// echo "<pre>";
// var_dump($alex);
// echo "</pre>";

// echo "<pre>";
// var_dump($bob);
// echo "</pre>";