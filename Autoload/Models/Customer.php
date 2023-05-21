<?php

class Customer
{
    public function __construct(private $email){}
    
    public function getEmail()
    {
        return $this->email;
    }
}