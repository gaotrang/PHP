<?php
declare(strict_types=1); //Kiem soat ngdung nhap vao dung kieu du lieu
// $number1 = 9;
// $number2 = 10;

// $total = $number1 + $number2;
// echo "Total : $total";

//PHP NAME CONVENTION
function totalTwoNumber()
{
    echo '<h1>Day la function</h1>';
}

//Ben trong ngoac la doi' so, 1 ham co nhiu argument cach nhau = dau' ,
function printNumber($number, $number3, $number2 = 88)
{
    echo "<br>So 1 : $number";
    echo "<br>So 2 : $number2";
    echo "<br>So 3 : $number3";
}

// totalTwoNumber();
// printNumber(17);
// printNumber(10);
//khi gan gia tri cho $number trong ngoac printNumner($number = ...){}
printNumber(55, 33);


$number1 = 9; //Global variable
$number2 = 10; //Global variable
function sumNumber(int $a, int $b): int
{
    //$a & $b => local variable (bien chi nam trong function thoi)
    // global $number1;
    $sum = $a + $b;
    //echo "<br>Total = $sum";
    return $a + $b;

}
// sumNumber(1, 2);
// sumNumber($number1, $number2);
$sum1 = sumNumber(1, 2);
echo "<br>Total = $sum1";
$sum2 = sumNumber($number1, $number2);
echo "<br>Total = $sum2";
$sum3 = sumNumber(5 , 9);
echo "<br>Total = $sum3";

//////////////////////
//them &tham chieu vao argument de dua $num = 2 vao function
function addFive(&$value){
    $value += 5;
}
$num = 2;
addFive($num);
echo "<br>$num";

 ?>
 <?php
 echo "<br> <h1>BAI TAP</h1>";

 //cau 1: Viet mot ham php de kiem tra xem 1 so co phai la so nguyen to khong?
 function isNguyenTo(int $a): bool
 {
    if($a <= 1){
        return false;
    }
    for($i = 2; $i <= sqrt($a); $i++){
        if($a % $i == 0){
            return false;
        }
    }
    return true;
 }
 $check = isNguyenTo(17);
 echo $check ? 'la so nguyen to' : 'Khong la so nguyen to';

 //cau 2: Viet 1 ham php tim so lon nhat trong 1 mang
 $array = array(5, 10, 15, 20, 66, 43);

 function isMax(array $arr): int
 {
    return max($arr);
 }
 $max = isMax($array);
 echo "<br>Max : $max";

 //Cau3: tinh dien tich hinh tron.
 define('PI', 3.14);
 //pow($varivale, so mu~)
 function circleArea($r)
 {
    return PI * pow($r, 2);
    //round(pi() * pow($r,2), 3);
 }
echo '<br>Dien tich hinh tron la : '.circleArea(5);
 
//Cau4: kiem tra xem 1 chuoi co phai la chuoi palindrome hay ko? (vi du: 2002, aaa1aaa, level, ...)

function isPalindrome(string $str): bool {
    $str = strtolower($str);
    $len = strlen($str);
    for($i = 0; $i <$len /2; $i++){
        if($str[$i] != $str[$len - $i - 1]){
            return false;
        }
    }
    return true;
}
$check = isPalindrome('level');
echo $check ? '<br>La chuoi Palindrome' : '<br>KHONG la chuoi Palindrome';

//Cau 5: Viet ham tinh giai thua
function GiaiThua(int $a) : int {
    if($a == 0){
        return 1;
    }else {
        return $a * GiaiThua($a - 1);
    }
}
$number = 7;
echo "<br>Giai thua cua $number la : ".GiaiThua($number);




 
 ?>
