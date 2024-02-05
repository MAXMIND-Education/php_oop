<?php

abstract class Shape {
    protected string $color;

    public function __construct(string $color) {
        $this->color = $color;
    }

    abstract public function getArea(): float;

    public function getColor(): string {
        return $this->color;
    }
}

class Circle extends Shape {
    protected float $radius;

    public function __construct(string $color, float $radius) {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * $this->radius * $this->radius;
    }
}

$circle = new Circle("red", 5);
echo "Color: " . $circle->getColor() . "\n";
echo "Area: " . $circle->getArea(); // Output: Color: red, Area: 78.539816339745

