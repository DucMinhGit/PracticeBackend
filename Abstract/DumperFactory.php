<?php

include_once "WebDumper.php";
include_once "ConsoleDumper.php";

class DumperFactory 
{
    public static function getDumper():object 
    {
        return PHP_SAPI === "cli" ? new ConsoleDumper : new WebDumper;
    }
}

?>