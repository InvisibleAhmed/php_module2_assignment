<?php
// Function to print even numbers from start to end with a specified step
function printEvenNumbers($start, $end, $step) {
    if ($start % 2 !== 0) {
        // If $start is odd, make it even by adding 1
        $start++;
    }

    for ($i = $start; $i <= $end; $i += $step) {
        echo $i;
        if ($i < $end) {
            echo ", ";
        }
    }
    echo "<br>";
}

// Using a for loop
echo "Using a for loop: ";
printEvenNumbers(1, 20, 2);

// Using a while loop
echo "Using a while loop: ";
$start = 1;
while ($start <= 20) {
    if ($start % 2 === 0) {
        echo $start;
        if ($start < 20) {
            echo ", ";
        }
    }
    $start += 2;
}
echo "<br>";

// Using a do-while loop
echo "Using a do-while loop: ";
$start = 1;
do {
    if ($start % 2 === 0) {
        echo $start;
        if ($start < 20) {
            echo ", ";
        }
    }
    $start += 2;
} while ($start <= 20);
?>
