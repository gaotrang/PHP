<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo 'Hello World';
?>

<?= '<br>'.'Nguyen Van A';?>
<?php
    $name = 'Nguyen Van B';
    echo '<br>Hello : '.$name;
    echo "<br>Hello : $name";

    printf("<br>Hello : %s", $name);
    echo '<br>';

    //Operator PHP
    $number1 = 10;
    $number2 = '19';

    $number1 = '10';
    if($number1 == $number2){
        echo 'Hai so bang nhau';
    }else{
        echo 'Hai so khong bang nhau';
    }

    if($number1 === $number2){
        echo 'Hai so bang nhau va cung kieu du lieu !!!!';
    }else{
        echo 'Hai so bang nhau nhung khac kieu du lieu ####';
    }
    echo '<br>';
    if($number1 >= $number2){
        echo 'Number 1 lon hon Number 2';
    }
    if($number1 <= $number2){
        echo 'Number 1 be hon Number 2';
    }
    echo '<br>';
    $number3 =5;
    if($number3 % 2 ===0){
        echo 'so chan';
    }else{
        echo 'so le';
    }
    echo '<br>';
    // 2^3 => 2 ** 3
    $number4 = 2**3;
    echo $number4;

    $number5 = 99;
    $number5 = $number5 + 1;
    $number5 += 1;
    $number5 -= 1;
    $number5 /= 1;
    $number5 %= 1;
    $number5 ++;

    echo '<br>'.$number5;
    ++$number5;
    echo '<br>'.$number5;

    $number6 = 99;
    echo '<br>'.++$number6; //100

    $number7 = 99;
    echo '<br>'.$number7++; //99
    echo '<br>'.$number7; //100

    $number8 = 7;//7
    $number8 += 3;//10
    ++$number8;//11
    $number8--;//10
    echo '<br>ket qua: '.--$number8; //9
    echo '<br>ket qua: '.$number8--; //10

    $number9 = 2;
    if($number8 != $number9){
        echo '<br>2 so khac nhau';
    }

    if($number8 <> $number9){
        echo '<br>2 so khac nhau';
    }
    //AND
    if($number7 % 2 === 0 && $number8 % 2 === 0){
        echo '<br> 2 so la so chan';
    }
    //OR
    if($number7 % 2 === 0 || $number8 % 2 == 0){
        echo '<br> co 1 so chan';
    }
    //NOI CHUOI~
    $string1 = 'Ho Ten: ';
    $string2 = 'Nguyen Van A';
    echo '<br>'.$string1.$string2;

    $string1 = 'Ho Ten: ';
    $string1 .= 'Nguyen Van A';
    echo '<br>'.$string1;

    $age = 30;
    // if($age > 30){
    //     echo 'men';
    // }else{
    //     echo 'boy';
    // }

    echo $age > 30 ? 'men' : 'boy';
    echo '<br>';

    $nguyenvana = ' Nguyen Van A';
    // $nguyenvana = NULL;
    echo $nguyenvana ?? 'default';
    echo '<br>';

    $color = 'yellow';
    if($color === 'red'){
        echo 'do';
    }else if($color === 'green'){
        echo 'xanh la cay';
    }else{
        echo 'Mau mac dinh';
    }

    switch($color){
        case 'red':
            echo 'do';
            break;
        case 'green':
            echo 'xanh la cay';
            break;
        default: 
        echo '<br>mau mac dinh';
    }

    $arraypoint = [3,6,1,2,9];
    echo '<br>'.$arraypoint[2];
    echo '<br>'.$arraypoint[3];
    print_r($arraypoint);
    
    $arrayNamePoint = [
        'nguyen van a' => 3,
        'nguyen van b' => 6,
        'nguyen van c' => 1,
        'nguyen van d' => 2,
        'nguyen van e' => 9
    ];

    $arrayClass = [
        'toan' => [1,2,3],
        'hoa' => [4,5,6],
        'ly' => [7,8,9]
    ];
    echo '<pre>';
    print_r($arrayClass);
    echo '</pre>';


    print_r($arrayNamePoint);
    echo '<br>'.$arrayNamePoint['nguyen van a'];

    $arrayNumber = array(10, 20, 30, 40, 50);
    echo $arrayNumber[0]; //output: 10
    echo $arrayNumber[2]; //output: 30

    $person = array(
        "name" => "John",
        "age" => 30,
        "city" => "New York"
    );
    echo $person["name"];
    echo $person["city"];

    $employees = array(
        array("name" => "John", "age" => 25, "position" => "Manger"),
        array("name" => "Mary", "age" => 28, "position" => "Developer"),
        array("name" => "David", "age" => 32, "position" => "Designer")
    );
    echo '<pre>';
    print_r($employees);
    echo '</pre>';
    echo $employees[0]["name"];
    echo $employees[1]["position"]; 








?>



</body>
</html>