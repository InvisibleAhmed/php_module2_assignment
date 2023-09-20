<?php
// Function to print the first n Fibonacci numbers
function printFibonacci($n) {
    $fibonacci = [];
    
    if ($n >= 1) {
        $fibonacci[] = 0; // The first Fibonacci number
    }
    
    if ($n >= 2) {
        $fibonacci[] = 1; // The second Fibonacci number
    }
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    echo implode(", ", $fibonacci);
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);
?>
