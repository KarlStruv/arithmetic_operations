<?php
//Modify the example program to compute the position
// of an object after falling for 10 seconds,
// outputting the position in meters.
// The formula in Math notation is:


$acceleration = -9.81;
$time = 10;
$initialVelocity = 0;
$initialPos = 0;

for ($i = 0; $i <= $time; $i++){
    $pos = (0.5 * $acceleration * $i * pow($i, 2) + ($initialVelocity * $i) + ($initialPos * $i));
    echo "At " . $i . "sec: " . floor($pos ) / 10 ."m". PHP_EOL;
}

