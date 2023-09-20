<?php
// Using a for loop to print numbers from 1 to 50, skipping multiples of 5
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        // Skip multiples of 5
        continue;
    }
    echo $i;

    // Add a comma and space after each number except the last one
    if ($i < 50) {
        echo ", ";
    }
}

?>
