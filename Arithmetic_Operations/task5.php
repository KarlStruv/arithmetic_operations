<?php
//Write a program that picks a random number from 1-100.
// Give the user a chance to guess it.
// If they get it right, tell them so.
// If their guess is higher than the number, say "Too high."
// If their guess is lower than the number, say "Too low."
// Then quit. (They don't get any more guesses for now.)

$randomNumber =  rand(1, 100);

$guess = (int)readline("Guess the number I am thinking of: ");

if($guess === $randomNumber){
    echo "Holy Shit! You actually guessed it!" . PHP_EOL;
    exit;
}else if($guess < $randomNumber){
    echo "Too low! The number I was thinking of is: $randomNumber" . PHP_EOL;
    exit;
} else{
    echo "Too high! The number I was thinking of is: $randomNumber" . PHP_EOL;
    exit;
}