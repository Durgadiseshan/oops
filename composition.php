<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Engine {
    public function start() {
        return "Engine started";
    }

    public function stop() {
        return "Engine stopped";
    }
}

class Car {
    private $engine;

    public function __construct() {
        $this->engine = new Engine();
    }

    public function start() {
        return $this->engine->start();
    }

    public function stop() {
        return $this->engine->stop();
    }
}

// Composition Example
$car = new Car();
echo $car->start() . "<br>"; // Outputs: Engine started
echo $car->stop() . "<br>";  // Outputs: Engine stopped
?>

</body>
</html>