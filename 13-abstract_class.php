<?php

abstract class Vehicle {
    // Abstract method
    abstract public function startEngine();

    // Concrete method
    public function stopEngine() {
        echo "Engine stopped.\n";
    }
}

class Car extends Vehicle {
    public function startEngine() {
        echo "Engine started. Vroom vroom!\n";
    }
}

class Motorcycle extends Vehicle {
    public function startEngine() {
        echo "Engine started. Vroooom!\n";
    }
}

$car = new Car();
$car->startEngine();  // Output: Engine started. Vroom vroom!
$car->stopEngine();   // Output: Engine stopped.

$motorcycle = new Motorcycle();
$motorcycle->startEngine();  // Output: Engine started. Vroooom!
$motorcycle->stopEngine();   // Output: Engine stopped.
