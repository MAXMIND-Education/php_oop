<?php

class Student {
    private array $data = [];

    public function __set(string $name, $value) {
        $this->data[$name] = strtoupper($value);
    }

    public function __get(string $name) {
        return $this->data[$name] ?? null;
    }
}

$student = new Student();
$student->name = "Alice"; // Calls __set() method and sets the 'name' property to "ALICE"
$student->age = 20; // Calls __set() method and sets the 'age' property to "20"

echo "Name: " . $student->name . "\n"; // Output: Name: ALICE
echo "Age: " . $student->age . "\n"; // Output: Age: 20


