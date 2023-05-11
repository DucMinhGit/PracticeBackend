<?php

include_once "./Utils/Assembler.php";
include_once "./Utils/Compiler.php";
include_once "./Utils/Linker.php";
include_once "./Utils/Preprocessor.php";


class IDE
{
    use Assembler, Compiler, Linker, Preprocessor;

    public function run()
    {
        $this->preprocess();
        $this->compile();
        $this->createObjCode();
        $this->createExec();

        echo 'Execute the file...done' . '<br/>';
    }
}