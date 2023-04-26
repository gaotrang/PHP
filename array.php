<?php
    $arrayNumber = array(32, 27, 12, 49, 48);
    echo $arrayNumber[0]; //output: 10
    echo '<br>';
    echo $arrayNumber[2]; //output: 30
//Dem tat ca phan tu trong mang

$totalItem = count($arrayNumber);
echo '<br>Count : '.$totalItem;

//sort theo asc
sort($arrayNumber);

echo '<pre>';
print_r($arrayNumber);
echo '<pre>';

//sort theo desc
rsort($arrayNumber);

echo '<pre>';
print_r($arrayNumber);
echo '</pre>';
 
// Them 1 phan tu vao mang (nam o cuoi mang)
array_push($arrayNumber, 1);

// Them 1 phan tu vao mang (nam o dau mang)
array_unshift($arrayNumber, 2);

//Xoa phan tu cuoi cung cua mang
$ItemLast = array_pop($arrayNumber);
echo '<br>Item last : '.$ItemLast;

//Xoa phan tu dau tien cua mang
$ItemFirst = array_shift($arrayNumber);
echo '<br>Item first : '.$ItemFirst;

echo '<pre>';
print_r($arrayNumber);
echo '</pre>';

$fruits1 = ["apple", "banana", "orange"];
$fruits2 = ["grape", "pineapple", "watermelon"];
$all_fruits = array_merge($fruits1, $fruits2);

echo '<pre>';
print_r($all_fruits);
echo '</pre>';

$arrayNumber2 = array(32, 27, 12, 49, 48);

// Them phan tu vao mang
$arrayNumber2[] = 13;

unset($arrayNumber2[3]);

echo '<pre>';
print_r($arrayNumber2);
echo '</pre>';


?>