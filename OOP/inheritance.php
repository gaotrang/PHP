<?php
    abstract Class Animal{
        //Attribute
        private $name;
        private $age;
        private $gender;

        public function getName(){
            return $this->name;
        }

        public function getAge(){
            return $this->age;
        }

        public function getGender(){
            return $this->gender;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function setAge($age){
            if($age >= 0){
                $this->age = $age;
            }else{
                throw new \Exception('Gender id invalid!');
            }
        }

        public function setGender($gender){
            if(in_array($gender, ['female', 'male'])){
                $this->gender=$gender;
            }else{
                throw new \Exception('Gender is invalid');
            }
        }

        abstract public function makeSound();

    }
    class Cat extends Animal{
        public $color;

        public function makeSound(){
            //parent::makeSound();
            echo 'Meoz meoz';

        }

    }
    class Dog extends Animal{
        public $mouth;

        public function makeSound(){
            // parent::makeSound();
            echo 'Woof woof';
        }

    }

    
    $cat = new Cat;
    $cat->color="red";

    $cat->setName('Meo');
    $cat->setAge(19);
    $cat->setGender('male');
    $cat->makeSound();

    echo "Cat : ".$cat->getName()."-Age : ".$cat->getAge()."-Gender : ".$cat->getGender().'<br>';

    $dog = new Dog;
    $dog->setName('Cho');
    $dog->setAge(30);
    $dog->setGender('male');
    $dog->makeSound();

    echo "Cho : ".$dog->getName()."-Age : ".$dog->getAge()."-Gender : ".$dog->getGender().'<br>';

?>