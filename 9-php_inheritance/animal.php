<?php


class Animal {
    public string $species;
    protected int $age;

    public function __construct(string $species, int $age) {
        $this->species = $species;
        $this->age = $age;
    }

    public function makeSound(): string {
        return "Unknown sound";
    }

    public function getInfo(): string {
        return "This is a {$this->species} with an age of {$this->age} years.";
    }
}

class Dog extends Animal {
    public function __construct(int $age) {
        parent::__construct("Dog", $age);
    }

    public function makeSound(): string {
        return "Woof!";
    }
}


// $animal = new Animal("Unknown", 5);
// echo $animal->getInfo(); // Output: This is a Unknown with an age of 5 years.
// echo $animal->makeSound(); // Output: Unknown sound

$dog = new Dog(3);
echo $dog->getInfo(); // Output: This is a Dog with an age of 3 years.
echo $dog->makeSound(); // Output: Woof!
