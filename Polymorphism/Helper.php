<?php

function greeting($peoples)
{
    foreach($peoples as $people)
    {
        echo $people->greet() ."<br>";
    }
}