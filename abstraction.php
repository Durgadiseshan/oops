<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
abstract class Employee {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function calculateSalary();
}

class SalariedEmployee extends Employee {
    private $monthlySalary;

    public function __construct($name, $monthlySalary) {
        parent::__construct($name);
        $this->monthlySalary = $monthlySalary;
    }

    public function calculateSalary() {
        return $this->monthlySalary;
    }
}

class HourlyEmployee extends Employee {
    private $hourlyRate;
    private $hoursWorked;

    public function __construct($name, $hourlyRate, $hoursWorked) {
        parent::__construct($name);
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }

    public function calculateSalary() {
        return $this->hourlyRate * $this->hoursWorked;
    }
}

// Using abstraction for employees
$salariedEmployee = new SalariedEmployee('John Doe', 5000);
$hourlyEmployee = new HourlyEmployee('Jane Doe', 20, 40);

echo $salariedEmployee->calculateSalary() . "<br>"; // Outputs: 5000
echo $hourlyEmployee->calculateSalary() . "<br>";   // Outputs: 800 (20 * 40)
?>
 
</body>
</html>