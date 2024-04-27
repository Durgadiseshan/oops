<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Student {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Course {
    private $students = [];

    public function addStudent(Student $student) {
        $this->students[] = $student;
    }

    public function getStudents() {
        return $this->students;
    }
}

// Aggregation Example
$student1 = new Student('Alice');
$student2 = new Student('Bob');

$course = new Course();
$course->addStudent($student1);
$course->addStudent($student2);

$studentsInCourse = $course->getStudents();
foreach ($studentsInCourse as $student) {
    echo "Student in Course: " . $student->getName() . "<br>";
}
?>

</body>
</html>