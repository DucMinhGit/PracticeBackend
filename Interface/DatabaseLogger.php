<?php

include_once "Logger.php";

class DatabaseLogger implements Logger
{
    public function log($message)
    {
        echo sprintf("%s to the database\n", $message);
    }
}
