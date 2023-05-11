<?php

include_once "Person.php";

class French extends Person
{
    public function greet()
    {
        return "Bonjour!";
    }
}