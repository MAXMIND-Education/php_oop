<?php

class Logger {
    public function log(string $severity, string $message) {
        echo "[$severity] $message\n";
    }

    public function __call(string $name, array $arguments) {
        if ($name === 'logError') {
            $this->log('ERROR', $arguments[0]);
        } else if ($name === 'logWarning') {
            $this->log('WARNING', $arguments[0]);
        } else {
            echo "Method not found: $name\n";
        }
    }
}

$logger = new Logger();
$logger->logError("An error occurred"); // Calls __call() method and logs: [ERROR] An error occurred
$logger->logWarning("Warning: Low disk space"); // Calls __call() method and logs: [WARNING] Warning: Low disk space
$logger->logInfo("Info: Application started"); // Calls __call() method and displays: Method not found: logInfo
