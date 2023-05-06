<?php

include "MyClassName.php";

class MyChildClassName extends MyClassName {
    public $methodAproperty, $methodBproperty;

    public function methodB($methodB) {
        $this->methodBproperty = $methodB;
        return $this;
    }

    public function getAllMethodInfo() {
        return "Interface methods are " . $this->methodAproperty . " & " . $this->methodBproperty;
    }
}

$obj = new MyChildClassName;

echo $obj->methodA('MethodA')->methodB('MethodB')->getAllMethodInfo();

?>