<?php

namespace Store\Model;

class Customer
{
    public function __construct(private $name) {}

    public function getName():string
    {
        return $this->name;
    }
}