<?php

interface Animal {
    public function makeSound(): string;
    public function move(): string;
}

class Dog implements Animal {
    public function makeSound(): string {
        return "Woof!";
    }

    public function move(): string {
        return "Running";
    }
}

class Bird implements Animal {
    public function makeSound(): string {
        return "Chirp!";
    }

    public function move(): string {
        return "Flying";
    }
}


$dog = new Dog();
echo "Dog says: " . $dog->makeSound() . "\n";
echo "Dog is: " . $dog->move() . "\n" . "<br>";

$bird = new Bird();
echo "Bird says: " . $bird->makeSound() . "\n";
echo "Bird is: " . $bird->move() . "\n";
