<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class ParentClass
    {
        protected $parentProperty = "I am a property in the parent class.";
    }
    

    class ChildClass extends ParentClass
    {
        public function getParentProperty()
        {
            return $this->parentProperty;
        }
    }

    // Create an instance of the child class
    $childObj = new ChildClass();

    // Access the property from the parent class using the child class method
    echo $childObj->getParentProperty();

    // accessing one class property with another using extend keywords.
?>
</body>
</html>