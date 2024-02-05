<?php

// $anonymousClass = new class
// {
//     public function greet()
//     {
//         return "Hello from the anonymous class!";
//     }
// };

// echo $anonymousClass->greet(); // Output: Hello from the anonymous class!

class BaseClass
{
    public function greet()
    {
        return "Hello from the base class!";
    }
}

$extendedClass = new class extends BaseClass
{
    public function greet()
    {
        return "Hello from the extended class!";
    }
};

echo $extendedClass->greet(); // Output: Hello from the extended class!
