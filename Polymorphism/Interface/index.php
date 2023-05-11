<?php

include_once "English.php";
include_once "German.php";
include_once "French.php";
include_once "../Helper.php";

$greeters = [
    new English,
    new German,
    new French
];

greeting($greeters);