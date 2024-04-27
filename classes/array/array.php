<!DOCTYPE html>
<html>
<body>
<?php
$students = array(
    array("Ankit", "erode", "45"), 
    array("raju", "Trichy", "50"),
    array("githa", "Trichy", "55"),
    array("uthaya", "Trichy", "65"),
    array("zam", "Trichy", "75")
);

$keys = array("name", "location", "score");


$startIndex = 0;
$endIndex = 3;

$indicesToLoad = range($startIndex, $endIndex);


$numberOfIterations = 1; 


for ($j = 1; $j <= $numberOfIterations; $j++) {
    foreach ($indicesToLoad as $index) {
        if (isset($students[$index])) {
            $associativeStudent = array_combine($keys, $students[$index]);
            echo ($index + 1) . ": " . PHP_EOL;
            print_r($associativeStudent);
            echo PHP_EOL;
        }
    }
}

?>
</body>
</html>
