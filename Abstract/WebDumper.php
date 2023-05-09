<?php

include_once "Dumper.php";

class WebDumper extends Dumper
{
    public function dump($data) 
    {
        echo "<br>";
        var_dump($data);
        echo "</br>";
    }
}
