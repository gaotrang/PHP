<?php
    Class Circle{
        const PI = 3.14;
        private $radius;
        
        public function __construct($radius){
            $this->radius=$radius;

        }
        public function getArea(){
            // return pi() * pow($this->radius, 2);
            return self::PI * pow($this->radius, 2);
        }

    }
//Tao doi tuong Rectangle
$circle = new Circle(10);

//Hioej thi dien tiech cua HCN
echo "Dien tich hinh tron la: ".$circle->getArea()."<br>";

echo "PI: ".Circle::PI;

?>