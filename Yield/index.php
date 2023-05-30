<?php

function getRange($max = 10) {

    for($i = 1; $i < $max; $i++)
    {
        yield $i;
    }
}

foreach(getRange(PHP_INT_MAX) as $range)
{
    echo "Dataset {$range} <br>";
}