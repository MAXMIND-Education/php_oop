<?php

// class MathOperations {
//     const PI = 3.14159;
//     const EULER_NUMBER = 2.71828;
// }

// echo "PI: " . MathOperations::PI . "\n"; // Output: PI: 3.14159
// echo "Euler Number: " . MathOperations::EULER_NUMBER . "\n"; // Output: Euler Number: 2.71828

class ParentClass {
    const PARENT_CONSTANT = 123;
}

class ChildClass extends ParentClass {
}

echo "Parent Constant: " . ParentClass::PARENT_CONSTANT . "\n"; // Output: Parent Constant: 123
echo "Child Constant: " . ChildClass::PARENT_CONSTANT . "\n"; // Output: Child Constant: 123
