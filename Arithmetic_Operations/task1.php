<?php
//Write a program to accept two integers and return true if the either one
//is 15 or if their sum or difference is 15.

$firstNumber = (int)readline("Enter the first number: ");
$secondNumber = (int)readline("Enter the second number: ");

if($firstNumber === 15 || $secondNumber === 15 || $firstNumber+$secondNumber === 15){
    echo"Task done! Either first or second number is 15, or the sum is 15" . PHP_EOL;
} else{
    echo"Incorrect numbers!" . PHP_EOL;
}