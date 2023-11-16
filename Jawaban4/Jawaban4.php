<?php

class CustomException extends Exception {}

function divideNumbers($x, $y) {
    try {
        if ($y == 0) {
            throw new CustomException("Division by zero is not allowed.");
        }

        $result = $x / $y;
        return $result;
    } catch (CustomException $e) {
        echo "Custom Exception: " . $e->getMessage() . "\n";
        return null;
    } catch (Exception $e) {
        echo "General Exception: " . $e->getMessage() . "\n";
        return null;
    }
}

// Contoh pemanggilan fungsi dengan parameter yang memunculkan exception
$result1 = divideNumbers(10, 0);  // Division by zero

// Contoh pemanggilan fungsi dengan parameter yang tidak memunculkan exception
$result2 = divideNumbers(10, 2);

// Output
echo "Result 1: " . var_export($result1, true) . "\n";
echo "Result 2: " . var_export($result2, true) . "\n";

?>
