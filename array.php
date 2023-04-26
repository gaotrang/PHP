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

// Xoa phan tu nao do trong mang
// unset($arrayNumber2[3]);

//Xoa tat ca mang
// unset($arrayNumber2);

echo '<pre>';
print_r($arrayNumber2);
echo '</pre>';

for($i = 0; $i < count($arrayNumber2); $i++){
    echo $arrayNumber2[$i].'<br>';
}
// Tinh tong cac phan tu trong array
$total = 0;
for($i = 0; $i < count($arrayNumber2); $i++){
    $total += $arrayNumber2[$i];
}

//Cong tat ca cac phan tu la so chan trong array
$totalEven = 0;
for($i = 0; $i < count($arrayNumber2); $i++){
    if($i % 2 === 0){
        $totalEven += $arrayNumber2[$i];
    }
}

$firstOld = 'Khong la so le';
for($i = 0; $i < count($arrayNumber2); $i++){
    if($arrayNumber2[$i] % 2 !== 0){
        $firstOld = $arrayNumber2[$i];
        break;
    }
}

echo '<br>'.$total;
echo '<br>'.$totalEven;
echo '<br>'.$firstOld;

echo '<br>';
// Duyet phan tu bang vong lap WHILE
$i = 0;
while($i < count($arrayNumber2)){
    echo '<br>'.$arrayNumber2[$i];
    $i++;
}
echo '<br>';
// Duyet phan tu bang vong lap DO WHILE
$j = 0;
do {
    echo '<br>'.$arrayNumber2[$j];
    $j++;
}while ($j < count($arrayNumber2));

// Duyet phan tu ko biet so luong phan tu
echo '<br>';
foreach($arrayNumber2 as $key=>$value){
    echo "<br>key : $key value: $value";
}

   $person = array(
        "name" => "John",
        "age" => 30,
        "city" => "New York"
    );
echo '<br>';
foreach($person as $key=>$value){
    echo "<br>key : $key value: $value";
}
$arrayKeys = array_keys($person);
$arrayValues = array_values($person);

echo '<pre>';
print_r($arrayKeys);
echo '</pre>';
echo '<pre>';
print_r($arrayValues);
echo '</pre>';



?>