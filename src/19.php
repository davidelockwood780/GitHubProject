<?php
    function calculateGCD($a, $b) {
        while ($b != 0) {
            $temp = $a % $b;
            $a = $b;
            $b = $temp;
        }
        return $a;
    }

    // Example usage:
    echo "The greatest common divisor of " . $a . " and " . $b . " is " . calculateGCD($a, $b);
?>
