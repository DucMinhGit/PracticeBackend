<?php

include_once "Greeting.php";

class German implements Greeting
{
    public function greet()
    {
        return 'Hallo';
    }
}