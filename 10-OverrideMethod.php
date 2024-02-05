<?php

// class Animal {
//     public function makeSound(): string {
//         return "Unknown sound";
//     }
// }

// class Dog extends Animal {
//     public function makeSound(): string {
//         return "Woof!";
//     }
// }

// $animal = new Animal();
// echo $animal->makeSound(); // Output: Unknown sound

// $dog = new Dog();
// echo $dog->makeSound(); // Output: Woof!


//---------------------------------------------

class Dog extends Animal {
    public function makeSound(): string {
        $animalSound = parent::makeSound(); // Call to the overridden method in the parent class
        return "Dog says: $animalSound Woof!";
    }
}

$dog = new Dog();
echo $dog->makeSound(); // Output: Dog says: Unknown sound Woof!


