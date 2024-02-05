<?php

class Calculator {
    public function __invoke($a, $b) {
        return $a + $b;
    }
}

$addFunction = new Calculator();
$result = $addFunction(5, 3); // Calls the __invoke() method and calculates 5 + 3

echo "Result: $result"; // Output: Result: 8



