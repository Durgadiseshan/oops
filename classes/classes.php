<!DOCTYPE html>
<html>
<body>
<?php
class Student {
    private $id;
    private $name;
    private $grade;

    public function __construct($id, $name, $grade) {
        $this->id = $id;
        $this->name = $name;
        $this->grade = $grade;
    }

    public function getDetails() {
        return "Student ID: $this->id, Name: $this->name, Grade: $this->grade";
    }
}

class Teacher {
    private $id;
    private $name;
    private $subject;

    public function __construct($id, $name, $subject) {
        $this->id = $id;
        $this->name = $name;
        $this->subject = $subject;
    }

    public function getDetails() {
        return "Teacher ID: $this->id, Name: $this->name, Subject: $this->subject";
    }
}

class Course {
    private $courseCode;
    private $courseName;
    private $teacher;
    private $students = [];

    public function __construct($courseCode, $courseName, Teacher $teacher) {
        $this->courseCode = $courseCode;
        $this->courseName = $courseName;
        $this->teacher = $teacher;
    }

    public function enrollStudent(Student $student) {
        $this->students[] = $student;
    }

    public function getDetails() {
        $teacherDetails = $this->teacher->getDetails();
        $studentsDetails = implode("\n", array_map(function ($student) {
            return $student->getDetails();
        }, $this->students));

        return "Course Code: $this->courseCode, Course Name: $this->courseName\n$teacherDetails\nStudents:\n$studentsDetails";
    }
}

// Usage example:

// Create instances of Teacher and Course
$mathTeacher = new Teacher(1, 'Mr. Smith', 'Math');
$mathCourse = new Course('MATH101', 'Introduction to Math', $mathTeacher);

// Create instances of Student
$student1 = new Student(101, 'John Doe', 'A');
$student2 = new Student(102, 'Jane Doe', 'B');

// Enroll students in the course
$mathCourse->enrollStudent($student1);
$mathCourse->enrollStudent($student2);

// Display course details
echo $mathCourse->getDetails();

?>
</body>
</html>
