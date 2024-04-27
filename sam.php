tatic Properties:

A static property is a variable that belongs to the class rather than instances of the class.
It is shared among all instances of the class.
Accessed using the class name followed by the scope resolution operator ::.
Can be used to store class-level data or configuration.
Example:

php
Copy code
class MyClass {
    public static $staticProperty = "This is a static property.";

    public function displayStaticProperty() {
        echo self::$staticProperty;
    }
}

echo MyClass::$staticProperty; // Accessing static property directly
$obj = new MyClass();
$obj->displayStaticProperty(); // Accessing static property through an instance
Static Methods:

A static method is a method that belongs to the class rather than instances of the class.
It can be called without creating an instance of the class.
Accessed using the class name followed by the scope resolution operator ::.
Can be used for utility functions or operations that are not dependent on instance-specific data.
Example:

php
Copy code
class MathOperations {
    public static function square($number) {
        return $number * $number;
    }
}

echo MathOperations::square(5); // Calling static method directly


Instance Methods:

Also known as object methods, instance methods operate on an instance of the class.
They have access to instance-specific data and can modify the state of the object.
Instance methods are called on an object of the class.
They are defined without the static keyword in the method signature.
Example:
php
Copy code
<?php
class MyClass {
    public $property;

    public function setProperty($value) {
        $this->property = $value;
    }

    public function getProperty() {
        return $this->property;
    }
}

$obj = new MyClass();
$obj->setProperty("Hello");
echo $obj->getProperty(); // Outputs: Hello
?>
Class Methods:

Also known as static methods, class methods operate on the class itself rather than instances of the class.
They do not have access to instance-specific data and cannot modify the object's state directly.
Class methods are called on the class itself, not on an instance.
They are defined with the static keyword in the method signature.
Example:
php
Copy code
<?php
class MathOperations {
    public static function square($number) {
        return $number * $number;
    }
}

echo MathOperations::square(5); // Outputs: 25
?>
In summary: