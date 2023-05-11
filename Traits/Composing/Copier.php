<?php

include_once "./Reader.php";
include_once "./Writer.php";

trait Copier 
{
    use Reader, Writer;
    
    public function copy($source, $destination)
    {
        $this->read($source);
        $this->write($destination);
    }
}