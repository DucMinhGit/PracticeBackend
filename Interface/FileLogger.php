<?php

include_once "Logger.php";

class FileLogger implements Logger
{
    private $handle, $logFile;

    public function __construct($fileName, $mode = 'a')
    {
        $this->logFile = $fileName;
        // Open log file for append
        $this->handle = fopen($fileName, $mode) or die('Could not open the log file');
    }

    public function log($message)
    {
        $message = date('F j, Y, g:i a') . ': ' . $message . "\n";
        fwrite($this->handle, $message);
    }

    public function __destruct()
    {
        if ($this->handle) {
            fclose($this->handle);
        }
    }
}
