<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Employee
    {
        private $first_name;
        private $last_name;
        private $age;

        public function __construct($first_name,$last_name,$age)
        {
            $this->first_name=$first_name;
            $this->last_name=$last_name;
            $this->age=$age;

        }
        public function getFirstName(){
            return $this->first_name;
        }
        public function getLastName(){
            return $this->last_name;
        }
        public function getAge(){
            return $this->age;
        }
    }
//we've called class methods on the $objEmployee object to print the information which was initialized during object creation
        $objEmployee = new Employee('ashok', 'kumar', 30);
        echo $objEmployee->getFirstName();
        echo "<br>";
        echo $objEmployee->getLastName();
        echo "<br>";
        echo $objEmployee->getAge();

   
        // which you can use to create structured objects.
    ?>
</body>
</html>