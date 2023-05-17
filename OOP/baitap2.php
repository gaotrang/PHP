<?php
    Class Retangle{
        private $width;
        private $height;
        
        public function __construct($width, $height){
            $this->width=$width;
            $this->height=$height;
        }
        public function getArea(){
            return $this->width * $this->height;
        }
        public function getCircumference(){
            return ($this->width + $this->height) *2;        
        }
    }
//Tao doi tuong Rectangle
$rectangle = new Retangle(2,4);

//Hioej thi dien tiech cua HCN
echo "Dien tich HCN la: ".$rectangle->getArea()."<br>";
echo "chu vi HCN la: ".$rectangle->getCircumference()."<br>";


?>