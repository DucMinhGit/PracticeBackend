<?php

trait Reader
{
    public function read($source)
    {
        echo sprintf('Read from %s <br>', $source);
    }
}