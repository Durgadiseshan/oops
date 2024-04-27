<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class MathOperations {
    public static $pi = 3.14;

    public static function square($number) {
        return $number * $number;
    }

    public static function circleArea($radius) {
        return self::$pi * $radius * $radius;
    }
}

// Accessing static property
echo "Value of pi: " . MathOperations::$pi . "<br>";

// Using static method
$number = 5;
echo "Square of $number: " . MathOperations::square($number) . "<br>";

$radius = 3;
echo "Area of a circle with radius $radius: " . MathOperations::circleArea($radius) . "<br>";
?>

</body>
</html>