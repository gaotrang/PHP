<?php
    //Attribute
    Class Person {
        private $name;
        private $age;
        private $gender;
    //Khoi tao construct
    public function __construct($name, $age, $gender){
        $this->name=$name;
        $this->age=$age;
        $this->gender=$gender;
    }

    //Method Setter
    public function setName($name){
        $this->name=$name;
    }
    public function setAge($age){
        if($age >= 0){
            $this->age = $age;
        }else{
            throw new \Exception('Age not valid');
        }
    }
    public function setGender($gender){
        $this->gender=$gender;
    }
    //Method Getter
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
//Tao doi tuong moi & thiet lap cac thuoc tinh
$person = new Person('VangHoe', 1, 'Female');

//Hien thi thong tin
echo "Name: ".$person->getName()."<br>";
echo "Age: ".$person->getAge()."<br>";
echo "Gender: ".$person->getGender()."<br>";



?>