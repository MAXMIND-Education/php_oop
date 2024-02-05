<?php

class Vehicle {
    protected string $brand;

    public function __construct(string $brand) {
        $this->brand = $brand;
    }

    protected function getBrand(): string {
        return $this->brand;
    }
}

class Car extends Vehicle {
    private string $model;

    public function __construct(string $brand, string $model) {
        parent::__construct($brand);
        $this->model = $model;
    }

    public function getCarDetails(): string {
        return "Brand: " . $this->getBrand() . ", Model: " . $this->model;
    }
}

$car = new Car("Toyota", "Camry");
echo $car->getCarDetails(); // Output: Brand: Toyota, Model: Camry

// // This will produce a fatal error since $brand is protected and cannot be accessed directly.
// echo $car->brand;

// // This will produce a fatal error since getBrand() is protected and cannot be accessed directly.
// echo $car->getBrand();
