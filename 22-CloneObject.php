<?php

class Person
{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$originalPerson = new Person("Dilshan", 35);
$clonePerson = clone $originalPerson;

$clonePerson->name = "Kamal"; // Modify the name of the cloned object

echo "Original Person: {$originalPerson->name}, {$originalPerson->age}\n"; // Output: Original Person: Dilshan, 35
echo "Cloned Person: {$clonePerson->name}, {$clonePerson->age}\n"; // Output: Cloned Person: Kamal, 35
