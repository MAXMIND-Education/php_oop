<?php


class Student {
    private array $data = [
        'name' => 'John',
        'age' => 25,
    ];

    public function __get(string $name) {
        return $this->data[$name] ?? null;
    }
}

$student = new Student();
echo "Name: " . $student->name . "\n"; // Output: Name: John
echo "Age: " . $student->age . "\n"; // Output: Age: 25
echo "Grade: " . $student->grade . "\n"; // Output: Grade:


