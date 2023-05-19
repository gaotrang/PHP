<?php
    //Convention class - method
    class MyString{
        //static properties
        public static $PI = 3.14;
        //phuong thuc tinh - static method
        public static function calLengthString($string){
            return strlen($string);
        }
        public static function getPI(){
            return self::$PI;
        }

    }
    //New instance of class MyString
    // $myString = new MyString;
    $length = MyString::calLengthString('le van test');
    // $length = $myString->calLengthString('le van test');
    echo $length;
    echo MyString::$PI;
    echo MyString::getPI();

?>