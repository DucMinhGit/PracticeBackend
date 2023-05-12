<?php

require_once "./HtmlElement.php";

$div = new HtmlElement("div");

$div->id = "page";
$div->class = "light";

// echo $div->html("Hello");

echo $div->id;
echo $div->class;