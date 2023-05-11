<?php

include_once "./Copier.php";

class FileUtil
{
    use Copier;

    public function copyFile($source, $destination)
    {
        $this->copy($source, $destination);
    }
}