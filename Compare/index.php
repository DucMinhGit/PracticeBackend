<?php

require_once "Point.php";

$p1 = new Point(10, 20);
$p2 = new Point(10, 20);

$p3 = $p1;

if($p2 === $p3) {
    echo 'p1 and p2 are equal.';
} else {
    echo 'p1 and p2 are not equal.';
}