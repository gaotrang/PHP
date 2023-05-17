<?php
    Class Student{
        private $id;
        private $name;
        private $age;
        private $gender;

        public function __construct($id, $name, $age, $gender){
            $this->id=$id;
            $this->name=$name;
            $this->age=$age;
            $this->gender=$gender;
        }
        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function getAge(){
            return $this->age;
        }
        public function getGender(){
            return $this->gender;
        }

    }
    Class Teacher{
        private $id;
        private $name;
        private $age;
        private $gender;

        public function __construct($id, $name, $age, $gender){
            $this->id=$id;
            $this->name=$name;
            $this->age=$age;
            $this->gender=$gender;
        }

        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function getAge(){
            return $this->age;
        }
        public function getGender(){
            return $this->gender;
        }

    }

    Class Person{
        private $id;
        private $name;
        private $age;
        private $gender;

        public function __construct($id, $name, $age, $gender){
            $this->id=$id;
            $this->name=$name;
            $this->age=$age;
            $this->gender=$gender;
        }
        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function getAge(){
            return $this->age;
        }
        public function getGender(){
            return $this->gender;
        }
    }

    Class Course{
        private $name;
        private $teacher;
        private $students;

        // public function __construct($name, $teacher, $students){
        //     $this->name=$name;
        //     $this->teacher=$teacher;
        //     $this->students=$students;
        // }

        public function getName(): string{
            return $this->name;
        }
        public function setName($name){
            $this->name=$name;
        }

        public function setTeacher($teacher){
            $this->teacher=$teacher;
        }

        public function getTeacher(): Teacher{
            return $this->teacher;
        }

        public function setStudents($student){
            $this->students=$student;
        }
        public function getStudents(): array{
            return $this->students;
        }

        public function removeStudent($id){
            foreach($this->students as $key => $student){
                if($student->getId() === $id){
                    unset($this->student[$key]);
                }
            }
        }

    }
    class Students extends Person{

    }

    $teacher = new Teacher(1, 'Vang Hoe', 40, 'Female');
    // $teacher->setId(1);
    // $teacher->setName('Vang Hoe');
    // $teacher->setAge(40);
    // $teacher->setGender('Female');

    $student1 = new Student(1, 'Van Ba', 18, 'Male');
    // $student1->setId(1);
    // $student1->setName('Van Ba');
    // $student1->setAge(18);
    // $student1->setGender('Male');

    // $student2 = new Student;
    $student2 = new Student(2, 'Mong Tuyen', 18, 'Female');
    // $student2->setId(2);
    // $student2->setName('Mong Tuyen');
    // $student2->setAge(18);
    // $student2->setGender('Female');

    // $student3 = new Student;
    $student3 = new Student(3, 'Long Bien', 18, 'Male');
    // $student3->setId(3);
    // $student3->setName('Long Bien');
    // $student3->setAge(18);
    // $student3->setGender('Male');

    $listStudent = [];
    $listStudent[] = $student1; //push item to array
    $listStudent[] = $student2; //push item to array
    $listStudent[] = $student3; //push item to array

    $course = new Course;
    $course->setName('PHP');
    $course->setTeacher($teacher);
    //$course->setStudents($listStudents)
    $course->setStudents([$student1, $student2, $student3]);

    echo 'Course : '.$course->getName().'<br>';

    echo 'Teacher ID : '.$course->getTeacher()->getId().'<br>';
    echo 'Teacher Name : '.$course->getTeacher()->getName().'<br>';
    echo 'Teacher Age : '.$course->getTeacher()->getAge().'<br>';
    echo 'Teacher Gender : '.$course->getTeacher()->getGender().'<br>';

    foreach($course->getStudents() as $student){
        echo 'Student ID : '.$student->getId().'<br>';
        echo 'Student Name : '.$student->getName().'<br>';
        echo 'Student Age : '.$student->getAge().'<br>';
        echo 'Student Gender : '.$student->getGender().'<br>';

    }

?>