<?php

include_once "./Logger.php";

$logger = new Logger();

$logger->LogToFileLogger('this is a test message #1');
$logger->log('this is a test message #2');
