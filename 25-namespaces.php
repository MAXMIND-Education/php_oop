<?php

// // File: MyClass.php
// class Logger {
//     public function log($message) {
//         echo "Logging: $message\n";
//     }
// }

// // File: AnotherFile.php
// class Logger {
//     public function log($message) {
//         echo "Another Logging: $message\n";
//     }
// }

// $logger1 = new Logger();
// $logger1->log("Message from Logger 1");
// File: MyClass.php

namespace MyNamespace;

class Logger {
    public function log($message) {
        echo "Logging: $message\n";
    }
}

// File: AnotherFile.php
namespace AnotherNamespace;

class Logger {
    public function log($message) {
        echo "Another Logging: $message\n";
    }
}

// $logger1 = new \MyNamespace\Logger();
// $logger1->log("Message from Logger 1");

// $logger2 = new \AnotherNamespace\Logger();
// $logger2->log("Message from Logger 2");

use MyNamespace\Logger as MyLogger;
use AnotherNamespace\Logger as AnotherLogger;

$logger1 = new MyLogger();
$logger1->log("Message from Logger 1");

$logger2 = new AnotherLogger();
$logger2->log("Message from Logger 2");
