<!-- the $objEmployee object itself wraps together properties and methods of the class. 
In other words, it hides those details from the rest of the program. In the world of OOP, this is called data encapsulation.

Encapsulation is an important aspect of OOP that allows you to restrict access to certain properties or methods of the object. 
And that brings us to another topic for discussion: access levels. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //public
    class Person
    {
        public $name;

        public function getName() 
        {
            return $this->name;
        }

    }
    $person = new Person();
    $person->name = 'Bob Smith';
    echo $person->getName();
    echo "<br>";

// class Car
// {
//     public $model;
//     public function getName()
//     {
//         return $this->model;
//     }

// }
// $car = new Car();
// $car->model = "innova";
// echo $car->getName();

//private
class Pen
{
    private $brand;

    public function getName()
    {
        return $this->brand;
    }

    public function setName($brand)
    {
        $this->brand = $brand;
    }
}

$pen = new Pen();
// $pen->brand = "RollerBallPen";
$pen->setName('RollerBallPen');
echo $pen->getName();

    
//encapsulation

class Car {
    // Private attributes
    private $make;
    private $model;
    private $year;

    // Constructor
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Getter methods to access private attributes
    public function getMake() {
        return $this->make;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    // Setter methods to modify private attributes
    public function setMake($make) {
        $this->make = $make;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    // Method to display car information
    public function displayInfo() {
        echo "Car: {$this->make} {$this->model}, Year: {$this->year}\n";
    }
}

// Creating an instance of the Car class
$myCar = new Car("Toyota", "Camry", 2020);

// Accessing and modifying private attributes using getter and setter methods
echo "Make: " . $myCar->getMake() . "\n";
echo "Model: " . $myCar->getModel() . "\n";
echo "Year: " . $myCar->getYear() . "\n";
0
$myCar->setMake("Honda");
$myCar->setModel("Accord");
$myCar->setYear(2022);

// Displaying car information using a method
$myCar->displayInfo();


    
    ?>
</body>
</html>