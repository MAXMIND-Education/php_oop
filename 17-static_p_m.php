<?php
//Static Property:
// class Counter {
//     public static int $count = 0;

//     public function __construct() {
//         self::$count++; // Increment the static count property on object creation
//     }

//     public static function getCount(): int {
//         return self::$count;
//     }
// }

// $object1 = new Counter();
// $object2 = new Counter();
// $object3 = new Counter();

// echo "Number of instances created: " . Counter::getCount(); // Output: Number of instances created: 3

//Static Method:
class MathUtils {
    public static function add(int $a, int $b): int {
        return $a + $b;
    }

    public static function multiply(int $a, int $b): int {
        return $a * $b;
    }
}

$result1 = MathUtils::add(5, 3); // Output: 8
$result2 = MathUtils::multiply(4, 2); // Output: 8

echo $result1 . "<br>" .$result2;