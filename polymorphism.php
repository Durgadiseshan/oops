<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    abstract class Shape {
        abstract public function calculateArea();
    }
    
    class Circle extends Shape {
        public function calculateArea() {
            // Specific implementation for calculating the area of a circle
            return "Circle Area";
        }
    }
    
    class Rectangle extends Shape {
        public function calculateArea() {
            // Specific implementation for calculating the area of a rectangle
            return "Rectangle Area";
        }
    }
    
    // Polymorphic behavior
    $shapes = array(new Circle(), new Rectangle());
    
    foreach ($shapes as $shape) {
        echo $shape->calculateArea() . "<br>";
    }
    ?>


</body>
</html>