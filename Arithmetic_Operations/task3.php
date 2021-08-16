<?php
//Write a program to produce the sum of 1, 2, 3, ..., to 100.
// Store 1 and 100 in variables lower bound and upper bound,
// so that we can change their values easily.
// Also compute and display the average. The output shall look like:

$lowerNumber = (int)readline("Enter the lower number: ");
$upperNumber = (int)readline("Enter the upper number: ");

$sum = 1;

for ($i = $lowerNumber; $i < $upperNumber; $i++){
    $sum += $i + 1;
}
$average = ($sum/$upperNumber);

echo "The sum of $lowerNumber to $upperNumber is $sum" . PHP_EOL;
echo "The average is $average" . PHP_EOL;

