<?php
    //trong tat ca cac interface deu la method ko co attitude
    interface canSwim{
        //All method - abstract public method
        public function canSwim();
    }
    interface canRun{
        public function canRun();
    }
    interface canFly{
        public function canFly();
    }
    abstract class Animal{
        //Attribute-Access Modifier - Encapsulation - tinh dong goi
        private $name;

        //Method
        //Setter - Getter - Standard
        public function setName($name){
            $this->name = $name;
        }

        public function getName(): string{
            return $this->name;
        }

        abstract public function makeSound();
        // abstract public function canRun();
        // abstract public function canSwim();
        // abstract public function canFly();

        //khong co thang con overide lai function thi dung final
        //Abstract khong di cung voi final
        //Method final ko cho overide cai method do
        //Class final ko cho extends lai cai class do
        final protected function eat(){
            echo 'eat';
            echo __METHOD__;
        }
    }

    //1 class only extends 1 class
    //Inheritance
    final class Cat extends Animal implements canRun, canSwim{
        //Overide
        public function makeSound(){
            //MAGIC Constants
            echo __METHOD__;
            //echo 'Cat make Sound';
        }
        // public function eat(){
        //     echo __METHOD__;
        // }
        public function canRun(){
            echo 'Co the chay';
        }
        public function canSwim(){
            echo 'Co the boi';
        }
    }
    class Dog extends Animal implements canRun, canSwim{
        public function makeSound(){
            echo __METHOD__;
        }
        public function canRun(){
            echo 'Co the chay';
        }
        public function canSwim(){
            echo 'Co the boi';
        }
    }
    // class Bird extends Animal implements canFly{
    //     public function canFly(){
    //         echo 'Co the bay';
    //     }
    // }
    $catA = new Cat;
    $catA->setName('Meozz');
    echo $catA->getName();

    $catB = clone $catA;
    $catB->setName('Meozz B');
    echo $catB->getName();

    echo $catA->getName();

?>