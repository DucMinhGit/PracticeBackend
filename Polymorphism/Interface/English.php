<?php

include_once "Greeting.php";

class English implements Greeting
{
    public function greet()
    {
        return 'Hello';
    }
}