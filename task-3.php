<?php
// Function to calculate Fibonacci numbers
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Initialize variables
$limit = 10;  // Number of Fibonacci numbers to calculate
$count = 0;  // Count of Fibonacci numbers calculated

// Calculate and print the first 10 Fibonacci numbers
for ($i = 0; $count < $limit; $i++) {
    $fib = fibonacci($i);
    
    if ($fib > 100) {
        // Break out of the loop if Fibonacci number exceeds 100
        break;
    }
    
    echo $fib;
    
    if ($count < $limit - 1) {
        echo ", ";
    }
    
    $count++;
}
?>
