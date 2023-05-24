<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $headingHot ?></h1>
    <?php
        // echo '<pre>';
        // print_r($datas);
        // echo'</pre>';
        // $a = 'b';
        // $b = 'Le van tet';
        // echo $$a;
        // ket qua: le van tet
        
    ?>

    <table border='1'>
        <h1>List Product HOT</h1>
        <tr>
            <td>STT</td>
            <td>Product</td>
        </tr>
        <?php foreach($listProductHot as $key => $data): ?>
            <tr>
                <td><?= $key+1 ?></td>
                <td><?= $data['name'] ?></td>
            </tr>
        <?php endforeach ?>

    </table>

    <table border='1'>
    <h1>Product New Arrival</h1>
        <tr>
            <td>STT</td>
            <td>Product</td>
        </tr>
        <?php foreach($listProductNewArrival as $key => $data): ?>
            <tr>
                <td><?= $key+1 ?></td>
                <td><?= $data['name'] ?></td>
            </tr>
        <?php endforeach ?>

    </table>
</body>
</html>