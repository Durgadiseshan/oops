<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Define a trait
trait Greet {
    public function sayHello() {
        echo "Hello, ";
    }

    public function sayWorld() {
        echo "World!";
    }
}

// Use a trait in a class
class MyGreetingClass {
    use Greet;

    public function greet() {
        $this->sayHello();
        $this->sayWorld();
        echo PHP_EOL;
    }
}

// Create an instance and use the trait method
$obj = new MyGreetingClass();
$obj->greet(); // Outputs: Hello, World!
?>

</body>
</html>