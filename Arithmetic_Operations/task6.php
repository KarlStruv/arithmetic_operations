<?php
//Write a program called coza-loza-woza.php
// which prints the numbers 1 to 110, 11 numbers per line.
// The program shall print "Coza" in place of the numbers which are multiples of 3,
// "Loza" for multiples of 5, "Woza" for multiples of 7,
// "CozaLoza" for multiples of 3 and 5, and so on. The output shall look like:




for($i = 1; $i <= 110; $i++){

    $printSomething = false;
        if($i % 7 === 0 && $i % 5 === 0){
            echo "LozaWoza ";
            $printSomething = true;
        } else if($i % 7 === 0 && $i % 3 === 0){
            echo "CozaWoza ";
            $printSomething = true;
        } else if($i % 5 === 0 && $i % 3 === 0){
            echo "CozaLoza ";
            $printSomething = true;
        } else if($i % 7 === 0){
            echo "Woza ";
            $printSomething = true;
        } else if($i % 5 === 0){
            echo "Loza ";
            $printSomething = true;
        } else if($i % 3 === 0 ){
            echo "Coza ";
            $printSomething = true;
        } else {
            echo "$i ";
        }
        if($i % 11 === 0 ){
            echo "" . PHP_EOL;
        }


        }


