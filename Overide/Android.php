<?php

include_once "Robot.php";

class Android extends Robot
{
    public function greet() 
    {
        $greeting = parent::greet();
        return $greeting.' greet operation system android';
    }
}
