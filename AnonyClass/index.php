<?php

interface Loggers
{
    public function log(string $message):void;
}

abstract class SimpleLogger implements Loggers
{   
    public function __construct(protected bool $newLline){}

    abstract public function log(string $message):void; 
}

$logger = new class(true) extends SimpleLogger
{
    public function __construct(bool $newLline)
    {
        parent::__construct($newLline);
    }

    public function log(string $message): void
    {
        echo $this->newLline;
    }
};

$logger->log("Hello");


