<?php

include_once "FileLogger.php";
include_once "DatabaseLogger.php";

$logger = new FileLogger("./log.txt", "w");

$logger->log('PHP interface is awesome');

$loggers = [
    new FileLogger("./log.txt"),
    new DatabaseLogger()
];

foreach ($loggers as $logger) {
    $logger->log("Log message");
}
