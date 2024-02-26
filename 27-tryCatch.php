<?php 

function divide($dividend, $divisor) {
    if ($divisor == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $dividend / $divisor;
}

try {
    echo divide(5, 0);
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage();
} finally {
    echo "\nCleanup can go here.";
}
