<?php

include_once "./DatabaseLogger.php";
include_once "./FileLogger.php";

class Logger
{
    use DatabaseLogger, FileLogger {
        FileLogger::log as LogToFileLogger;
        DatabaseLogger::log insteadof FileLogger;
    }
}
