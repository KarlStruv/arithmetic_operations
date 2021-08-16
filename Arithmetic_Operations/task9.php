<?php
//Write a program that calculates and displays a person's body mass index (BMI).
// A person's BMI is calculated with the following formula: BMI = weight x 703 / height ^ 2.
// Where weight is measured in pounds and height is measured in inches. Display a message indicating
// whether the person has optimal weight, is underweight, or is overweight.
// A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
// If the BMI is less than 18.5, the person is considered underweight. If the BMI value is greater than 25,
// the person is considered overweight.
//
//Your program must accept metric units.

$height = (int)readline("Enter your height in cm: ");
$weight = (int)readline("Enter your weight in kg: ");

$inInches = $height * 0.39370079;
$inPounds = $weight * 2.20462262;

$bmi = ($inPounds * 703) / pow($inInches, 2);

if($bmi < 18.5){
    echo "Sorry, you are underweight" . PHP_EOL;
} else if($bmi > 25){
    echo "Sorry, you are overweight" . PHP_EOL;
} else{
    echo "Congratulations! You are in a good shape!" . PHP_EOL;
}
//var_dump($bmi);
