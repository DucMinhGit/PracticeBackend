<?php

include_once "./Utils/Logger.php";

class User 
{
    use Logger;

    public function __construct()
    {
        $this->log('A new user created');    
    }
}