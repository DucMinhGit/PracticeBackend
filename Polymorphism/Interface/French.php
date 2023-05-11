<?php

include_once "Greeting.php";

class French implements Greeting
{
    public function greet()
    {
        return 'Bonjour!';
    }
}