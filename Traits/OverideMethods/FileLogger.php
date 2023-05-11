<?php

trait FileLogger
{
    public function log($msg)
    {
        echo 'File Logger ' . date('Y-m-d h:i:s') . ':' . $msg . '<br/>';
    }
}