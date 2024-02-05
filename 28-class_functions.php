<?php
//--------class_exists----------------------
// class Car {
//     public function startEngine() {
//         echo "Engine started!\n";
//     }
// }

// if (class_exists('Car')) {
//     $car = new Car();
//     $car->startEngine();
// } else {
//     echo "Car class is not defined.\n";
// }
//-----------------------------------------

//--------method_exists()----------------------

// class Calculator {
//     public function add($a, $b) {
//         return $a + $b;
//     }
// }

// $calculator = new Calculator();

// if (method_exists($calculator, 'add')) {
//     $result = $calculator->add(5, 3);
//     echo "Result: $result\n";
// } else {
//     echo "Method add() does not exist.\n";
// }

//-----------------------------------------

//--------property_exists()----------------------

class Person {
    public $name;
    public $age;
}

$person = new Person();

if (property_exists($person, 'name')) {
    $person->name = 'Dilshan';
    echo "Name: " . $person->name . "\n";
} else {
    echo "Property name does not exist.\n";
}
