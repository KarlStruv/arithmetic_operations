<?php
//Write a program called CheckOddEven which prints "Odd Number"
// if the int variable “number” is odd, or “Even Number” otherwise.
// The program shall always print “bye!” before exiting.

$number = (int)readline("Enter a number: ");


function CheckOddEven(int $integer){
    if($integer % 2 === 1){
        return true;
    }else{
        return false;
    }
}

if(CheckOddEven($number)){
    echo"Odd Number" . PHP_EOL;
}else{
    echo "Even Number" . PHP_EOL;
}
echo "Bye!" . PHP_EOL;
exit;