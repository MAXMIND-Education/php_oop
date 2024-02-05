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

// class Cat extends Animal {
//     public function makeSound(): string {
//         return "Meow!";
//     }
// }

// $animals = [new Dog(), new Cat()];

// foreach ($animals as $animal) {
//     echo $animal->makeSound() . "\n";
// }



//----------------------------------------------------

// interface Shape {
//     public function getArea(): float;
// }

// class Circle implements Shape {
//     private float $radius;

//     public function __construct(float $radius) {
//         $this->radius = $radius;
//     }

//     public function getArea(): float {
//         return pi() * $this->radius * $this->radius;
//     }
// }

// class Rectangle implements Shape {
//     private float $width;
//     private float $height;

//     public function __construct(float $width, float $height) {
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function getArea(): float {
//         return $this->width * $this->height;
//     }
// }

// $shapes = [new Circle(5), new Rectangle(4, 6)];

// foreach ($shapes as $shape) {
//     echo "Area: " . $shape->getArea() . "\n";
// }


//------------------------------------------------

// Parent class
class Shape {
    protected string $color;

    public function __construct(string $color) {
        $this->color = $color;
    }

    public function getArea(): float {
        return 0; // Default area for generic shape (will be overridden in subclasses)
    }

    public function getColor(): string {
        return $this->color;
    }
}

// Subclass: Circle
class Circle extends Shape {
    private float $radius;

    public function __construct(string $color, float $radius) {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * $this->radius * $this->radius;
    }
}

// Subclass: Rectangle
class Rectangle extends Shape {
    private float $width;
    private float $height;

    public function __construct(string $color, float $width, float $height) {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float {
        return $this->width * $this->height;
    }
}


$circle = new Circle("red", 5);
$rectangle = new Rectangle("blue", 4, 6);

// Use objects interchangeably
$shapes = [$circle, $rectangle];

foreach ($shapes as $shape) {
    echo "Shape color: " . $shape->getColor() . ",Area: " . $shape->getArea() . "\n  <br> ";
}

