<?php 

function divide($numerator, $denominator) {
    if ($denominator === 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
}

try {
    $result = divide(10, 2); // This will succeed
    echo "Result: $result\n";

    $result = divide(8, 0); // This will throw an exception
    echo "Result: $result\n"; // This line won't be executed
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "\n";
}


