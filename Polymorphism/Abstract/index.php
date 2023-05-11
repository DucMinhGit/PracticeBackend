<?php

include_once "English.php";
include_once "German.php";
include_once "French.php";
include_once "American.php";
include_once "../Helper.php";

$peoples = [
    new English,
    new German,
    new French,
    new American,
];

greeting($peoples);
