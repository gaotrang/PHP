
<?php
    
    //Cau3
    for($i =1; $i <= 10; $i++){
        for($j = 1; $j <= 10; $j++){
            echo "$i X $j =".$i * $j . " ";
        }
        echo "<br>";
    }
    

    //Cau 4
    echo '<br><h1>Cau 4</h1>';
    for($i = 1; $i <= 20; $i++){
        if($i % 2 == 0){
            echo $i." ";
        }
        
    }

    // Cau 5 
    echo '<br><h1>Cau 5</h1>';
    for ($i = 2; $i <= 100; $i++){
        $isPrime = true;
        for ($j = 2; $j <= sqrt($i); $j++){
            if($i % $j == 0){
                $isPrime = false;
                break;
            }
        }
        if($isPrime) {
            echo $i . " ";
        }
        
    };        
    ?>

<br>
<table border = '1'> 
<?php
    for($i = 0; $i <= 10; $i++){
        echo '<tr>';
        for($j = 1; $j <= 10; $j++){
            echo '<td>';
            if($i === 0){
                echo sprintf('Bang cuu chuong %s', $j);
            }else{
                echo sprintf('%s x %s = %s', $i, $j, $i * $j);
            }
            echo '</td>';
        }
        echo '</tr>';
    }
?>

<style>
    td{
        height: 100px;
        width: 100px;
        border: 1px solid black;
    }
    .white{
        background-color: white;
    }
    .black{
        background-color: black;
    }

</style>

</table>

<br>
<table border='1'>
    <?php
    $flag = true;
        for($row = 1; $row <= 8; $row++){
            echo '<tr>';
                for($column = 1; $column <= 8; $column++){
                    $class = ($row + $column) % 2 === 0 ? 'white' : 'black';
                    echo '<td class="'.$class.'"></td>';
                }
                echo '</tr>';
        }
    ?>
</table>

<?php
//Cau 1: nhap vao 10 chuoi in ra chuoi dai nhat
$array = array(
    '11111',
    '1111111',
    '1111111111',
    'asd',
    'dfgdfg',
    '1jhkjhh',
    'fgh1',
    'klkjlkjlkj',
    'd57658768679',
    'klkdfggjhgjgh',
    'd500000000000000'
);
echo '<pre>';
print_r($array);
echo '</pre>';
$max_length = 0;
$max_string = '';

foreach ($array as $string){
    $length = strlen($string);
    if($length > $max_length){
        $max_length = $length;
        $max_string = $string;
    }
}
echo 'Chuoi dai nhat la: '.$max_string . '(do dai ' . $max_length . ')';
echo '</tr>';

//Cau 2: Tao mot mang chua 5 so nguyen va tim gtri lon nhat trong mang
$array = array(10, 5, 8, 3, 12);

$max = max($array);
echo "<br>Gia tri lon nhat trong mang la: " . $max;

//Cau 3: CHo mot mang 10 so nguyen. Hay viet ctrinh PHP de tim ra gtri lon thu 2 trong mang
$array3 = array(10, 12, 16, 22, 30, 65, 77, 11, 90, 89, 90);
$arrayUnique = array_unique($array3);
rsort($arrayUnique);
$second_largest = $arrayUnique[1];

// rsort($array3);
// $second_largest = $array3[count($array3) - 2];
echo "<br>Gia tri lon thu 2 la: " . $second_largest;

//Cau 4: Cho mot mang so nguyen. Hay viet ctrinh PHP de tim phtu lon nhat va phan tu nho nhat trong mang
$array4 = array(9, 2, 7, 2, 5, 1);

echo '<pre>';
print_r($array4);
echo '</pre>';
$min = min($array4);
$max = max($array4);
$minIndex = array_search($min, $array4);
$maxIndex = array_search($max, $array4);
echo"<br>Phan tu nho nhat la: $min, o vi tri $minIndex <br>";
echo "<br>Phan tu lon nhat la: $max, o vi tri $maxIndex";

//Cong tat ca cac phtu len 5 don vi
$array41 = array_map(function ($item){
    return $item + 5;
}, $array4);

echo '<pre>';
print_r($array41);
echo '</pre>';

//Cau 5: In ra cac phtu chan trong mang
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$even_numbers = array_filter($numbers, function($num){
    return $num % 2 == 0;
});
echo '<pre>';
print_r($even_numbers);
echo '</pre>';


$name = 'nguyen van a';
//explode convert tu string => array
$arrayName = explode(' ',$name);

$test = ['le', 'Van', 'Test'];
// implode convert tu array => string
$stringTest = implode(' ',$test);

$product = ' Quan Ao Tre Em ';
//B1:
$arrayProduct = explode(' ',$product); //array product 4 items
$urlFriendly = implode('-', explode(' ',trim($product)));

var_dump($urlFriendly);


?>




