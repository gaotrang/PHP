<?php
    Class Cat {
        
        //Attributes
        //Tat ca attributes deu dung private
        private $name = 'Meo';
        private $color = 'Black';
        private $foot = 4;

        //public -> su dung ben trong Class va ben ngoai Class
        //Private -> chi su dung ben trong Class
        //Protected -> se su dung dc ben trong Class va nhung thang con cua no'

        //Phuong thuc khoi tao //Construct
        public function __construct($name, $color, $foot = 4){
            $this->name = $name;
            $this->color = $color;
            $this->foot = $foot;
            // echo 'Khoi tao<br>';
        }

        //Method
        public function eat(){
            echo '<br>An';
        }
        public function run(){
            echo '<br>Chay';
        }
        public function speak(){
            echo '<br>Meozzz';
        }

        //Setter
        public function setName($name){
            $this->name = $name;
        }

        public function setColor($color){
            $this->color = $color;
        }
        public function setFoot($foot){
            $this->foot = $foot;
        }

        //Getter phai co return
        public function getName(){
            return $this->name;
        }

        public function getColor(){
            return $this->color;
        }

        public function getFoot(){
            return $this->foot;
        }

        //Phuong thuc huy //Destruct
            public function __destruct(){
                // echo 'Huy ne';
            }

    }


    //Cat instance of Class Cat
//     $cat = new Cat;
//     $cat->name = 'Meo';
//     $cat->color = 'white';
//     $cat->foot = 4;
    
//     echo "Cat name : $cat->name , color : $cat->color , foot : $cat->foot";
//     $cat->speak();
//     $cat->run();
//     $cat->eat();

// $cat->setName('Meo Diahia');
// echo $cat->getName();

// $cat->setColor('Black');
// echo $cat->getColor();
// $cat->setFoot(2);
// echo $cat->getFoot();

// $cat = new Cat('Meo Tom','Brown');
// echo $cat-> getName();
// echo '<br>';
$cat = new Cat('Crazy Cat', 'Black', 4);
echo $cat->name;



?>