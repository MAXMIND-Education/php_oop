<?php

class Animal {
    protected string $species;

    public function __construct(string $species) {
        $this->species = $species;
        echo "Animal constructor called. Species: $species\n";
    }

    public function makeSound(): string {
        return "Unknown sound";
    }
}

class Dog extends Animal {
    public function __construct(string $species) {
        parent::__construct($species); // Call the parent constructor
        echo "Dog constructor called.\n";
    }

    public function makeSound(): string {
        return "Woof!";
    }
}

$dog = new Dog("Canine");
