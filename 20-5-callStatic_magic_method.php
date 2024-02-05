<?php

class MathOperations {
    public static function add(int $a, int $b) {
        return $a + $b;
    }

    public static function multiply(int $a, int $b) {
        return $a * $b;
    }

    public static function __callStatic(string $name, array $arguments) {
        if ($name === 'square') {
            return $arguments[0] * $arguments[0];
        } else {
            echo "Static method not found: $name\n";
        }
    }
}

echo MathOperations::add(5, 3); // Output: 8
echo MathOperations::multiply(4, 2); // Output: 8

echo MathOperations::square(4); // Calls __callStatic() method and outputs: 16
echo MathOperations::cube(3); // Calls __callStatic() method and outputs: Static method not found: cube


