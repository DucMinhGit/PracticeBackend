<?php

include "MyInterface.php";

abstract class MyClassName implements MyInterface 
{
    public function methodA($methodA) {
        $this->methodAproperty = $methodA;
        return $this;
    }

    public abstract function methodB($methodB);
}

?>