<?php
//Foo Corporation needs a program to calculate how much to pay their hourly employees.
// The US Department of Labor requires that employees get paid time and a half
// for any hours over 40 that they work in a single week.
// For example, if an employee works 45 hours, they get 5 hours of overtime, at 1.5 times their base pay.
// The State of Massachusetts requires that hourly employees be paid at least $8.00 an hour.
// Foo Corp requires that an employee not work more than 60 hours in a week.

//An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
//For every hour over 40, they get overtime = (base pay) × 1.5.
//The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
//If the number of hours is greater than 60, print an error message.

$john = new stdClass();
$john->name = "John Smith";
$john->hourlypay = 8;
$john->hoursworked = 40;

$sarah = new stdClass();
$sarah->name = "Sara Jones";
$sarah->hourlypay = 5;
$sarah->hoursworked = 45;

$tom = new stdClass();
$tom->name = "Tom Angelo";
$tom->hourlypay = 8;
$tom->hoursworked = 65;

$employees = [$john, $sarah, $tom];

echo "Employee      Base Pay      Hours Worked      Salary" . PHP_EOL;

foreach ($employees as $key => $person){

$payOk = true;

    if($person->hourlypay < 8){
        echo "$person->name      $person->hourlypay            $person->hoursworked               Error! Min pay is $8.00 an hour. (Current: $person->hourlypay)" . PHP_EOL;
        $payOk = false;
    }

    if($person->hoursworked > 60){
        echo "$person->name      $person->hourlypay            $person->hoursworked               Error! Cannot work more than 60 hours a week. (Worked: $person->hoursworked)" . PHP_EOL;

    }

    if($person->hourlypay >= 8 && $person->hoursworked <= 60 && $payOk) {
        $salary = ($person->hourlypay * $person->hoursworked);
        echo "$person->name      $person->hourlypay            $person->hoursworked               $salary" . PHP_EOL;
    }

    if($person->hoursworked > 40 && $person->hoursworked < 60 && $payOk){
        $salary = (($person->hourlypay * 1.5) * ($person->hoursworked - 40)) + ($person->hourlypay * $person->hoursworked);
        echo "$person->name      $person->hourlypay            $person->hoursworked               $salary" . PHP_EOL;
    }
}