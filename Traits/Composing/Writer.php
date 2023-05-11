<?php

trait Writer 
{
    public function write($destination)
    {
        echo printf('Write to %s <br>', $destination);
    }
}