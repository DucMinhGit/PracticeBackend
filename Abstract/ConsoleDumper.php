<?php

include_once "Dumper.php";

class ConsoleDumper extends Dumper
{
    public function dump($data) 
    {
        var_dump($data);
    }
}
?>