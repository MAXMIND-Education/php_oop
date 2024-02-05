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

$person1 = new Person("Dilshan", 35);
$person2 = new Person("Nimal", 28);

$person3 = $person1; // $person3 now references the same object as $person1

// Using equality operator (==)
var_dump($person1 == $person2); // Output: bool(false) - Different instances, same property values
var_dump($person1 == $person3); // Output: bool(true) - Same instance and property values

// Using identity operator (===)
var_dump($person1 === $person2); // Output: bool(false) - Different instances
var_dump($person1 === $person3); // Output: bool(true) - Same instance
