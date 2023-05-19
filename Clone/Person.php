<?php

require_once "./Address.php";

class Person
{
    public $address;

    public function __construct(public string $name) {
        $this->address = new Address();
    }
}