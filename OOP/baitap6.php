<?php
    abstract class Shape {
        abstract public function getArea();
    }
    class Rectangle extends Shape {
        private $width;
        private $height;
        public function __construct($width, $height){
            $this->width=$width;
            $this->height=$height;
        }
        public function getArea(){
            return $this->width * $this->height;
        }

    }
    class Circle extends Shape{
        private $radius;
        public function __construct($radius){
            $this->radius = $radius;
        }
        public function getArea(){
            return pi() * pow($this->radius, 2);
        }
    }
    class Triagle extends Shape {
        private $base;
        private $height;
        public function __construct($base, $height){
            $this->base = $base;
            $this->height = $height;
        }
        public function getArea(){
            return 0.5 * $this->base * $this->height;
        }
    }
    $shapes = array(
        new Rectangle(5, 10),
        new Circle(7),
        new Triagle(8,12)

    );

    foreach($shapes as $shape){
        echo "Area of shape is: ".$shape->getArea()."<br>";
    }

?>