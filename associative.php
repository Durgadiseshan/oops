<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Employee {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Department {
    private $employees = [];

    public function addEmployee(Employee $employee) {
        $this->employees[] = $employee;
    }

    public function getEmployees() {
        return $this->employees;
    }
}

// Association Example
$employee1 = new Employee('John Doe');
$employee2 = new Employee('daniel');

$department = new Department();
$department->addEmployee($employee1);
$department->addEmployee($employee2);

$employeesInDepartment = $department->getEmployees();
foreach ($employeesInDepartment as $employee) {
    echo "Employee in Department: " . $employee->getName() . "<br>";
}
?>


</body>
</html>