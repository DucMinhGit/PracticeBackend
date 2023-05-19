<?php

class FileReader
{


    private $filehandle;

    private $filename;


    public function __construct()
    {
        $this->open();
    }

    private function open()

    {
        $this->filehandle = fopen("./test.txt", 'r');

        return $this;
    }

    public function read()
    {
        $contents = fread($this->filehandle, filesize("./test.txt"));

        return nl2br($contents);
    }

    public function close()
    {
        if ($this->filehandle) {
            fclose($this->filehandle);
        }
    }


    public function __sleep(): array
    {
        $this->close();

        return array('filename');
    }

    public function __unserialize(array $data): void
    {
        $this->open();
    }
}