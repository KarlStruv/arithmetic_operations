<?php
//Write a program to compute the product of integers
// from 1 to 10 (i.e., 1×2×3×...×10), as an int.
// Take note that it is the same as factorial of N.


function getFactorial(int $number){
    $sum = 1;
    for($i = 1; $i <= $number; $i++){
        $sum = $sum * $i;
    }
    return $sum;
}

$factorial = (int)readline("Enter the a number: ");
$endValue = getFactorial($factorial);
echo "The factorial of $factorial is $endValue" . PHP_EOL;