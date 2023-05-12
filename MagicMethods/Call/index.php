<?php

require_once "Str.php";

$str = new Str("Hello, world!");

echo $str->upper() . "<br>";
echo $str->lower() . "<br>";
echo $str->length() . "<br>";