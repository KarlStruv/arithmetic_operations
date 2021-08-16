<?php
/*
class calculator {
    public static function getCircle()
    {
        $radius = (int)readline("Enter the radius: ");
        echo "The Area of the Circle is:" . pi() * $radius * 2 . PHP_EOL;
    }

    public static function getRectangle()
    {
        $length= (int)readline("Enter the length: ");
        $width = (int)readline("Enter the width: ");
        echo "The Area of the Rectangle is:" . $length * $width . PHP_EOL;
    }

    public static function getTriangle()
    {
        $base= (int)readline("Enter the base: ");
        $height = (int)readline("Enter the height: ");
        echo "The Area of the Triangle is:" . $base * $height * 0.5 . PHP_EOL;
    }

    public static function justQuit()
    {
        exit;
    }
}

*/

//Area = π * r * 2
//Use Math.PI for π and r for the radius of the circle




echo "Geometry calculator:" . PHP_EOL;
echo
    "1. Calculate the Area of a Circle " . PHP_EOL .
    "2. Calculate the Area of a Rectangle " . PHP_EOL .
    "3. Calculate the Area of a Triangle " . PHP_EOL .
    "4. Quit" . PHP_EOL ;

$choice = (int)readline("Enter your choice (1-4): ");

if($choice === 1){
    $radius = (int)readline("Enter the radius of the Circle: ");
    if($radius <= 0){
        echo "You've entered a negative number!" . PHP_EOL;
        exit;
    }
    echo "The Area of the Circle is:" . pi() * $radius * 2 . PHP_EOL;
}
else if($choice === 2){
    $length= (int)readline("Enter the length of the Rectangle: ");
    $width = (int)readline("Enter the width of the Rectangle: ");
    if($length <= 0 || $width <= 0){
        echo "You've entered a negative number!" . PHP_EOL;
        exit;
    }
    echo "The Area of the Rectangle is:" . $length * $width . PHP_EOL;
}
else if($choice === 3){
    $base= (int)readline("Enter the base of the Triangle: ");
    $height = (int)readline("Enter the height of the Triangle: ");
    if($base <= 0 || $height <= 0){
        echo "You've entered a negative number!" . PHP_EOL;
        exit;
    }
    echo "The Area of the Triangle is:" . $base * $height * 0.5 . PHP_EOL;
}
else if($choice === 4){
    exit;
}
else{
    echo "Error!" . PHP_EOL;
}



