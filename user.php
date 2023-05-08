<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<?php
    //Super Global Variable
    // ?? double question mark


    //isset: ban da khoi tao bien do hay chua
    if(isset($_GET['a']) && isset($_GET['b'])){
        $sothunhat = $_GET['a'];
        $sothuhai = $_GET['b'];
            echo "so 1 : $sothunhat, so 2 : $sothuhai";
    echo "<br>Tong : $sothunhat + $sothuhai = ".$sothunhat + $sothuhai;

    }


?>

<body>
    <form method="GET" action="">
        <input type="text" placeholder="Number 1" name="a">
        <input type="text" placeholder="Number 2" name="b" >
        <input type="submit" value="Total"/>
    </form>

</body>
</html>