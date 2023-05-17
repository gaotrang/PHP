<?php define('URL', 'http://localhost/PHP/' ); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="<?= URL.'RegisterForm.php' ?>">Create NewUser</a>
<?php
require_once('header.php');
require('database.php');

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0){

//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["id"]." - UserName: " . $row["username"]. " " . $row["password"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

if(isset($_GET['action']) && $_GET['action'] === 'UserDelete' & isset($_GET['id'])){
    //GET Image Name to Delete
    $sqlSelect = 'SELECT image_url FROM user WHERE id ='.$_GET['id'];
    $resultSelect = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $imageUrl = $row['image_url'];

    $sqlDelete = "DELETE FROM user WHERE id = ".$_GET['id'];
    $resultDelete = mysqli_query($conn, $sqlDelete);
    if($resultDelete){
        echo 'Delete thanh cong';
        //Delete Image base on image name
        unlink('uploads/'.$imageUrl);
        header('Location: ' . URL .'list_user.php');
    }else{
        echo 'Delete that bai';
    }
}

// $sql = 'SELECT * FROM user WHERE id='.'14';
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($resultSlect);

?>
<?php if (mysqli_num_rows($result) > 0) { ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>UserName</th>
            <th>Password</th>
            <th>Image_url</th>
            <th>Date</th>
            <th>Action</th>

        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td>
                    <?php echo $row["id"]; ?>
                </td>
                <td>
                    <?php echo $row["username"]; ?>
                </td>
                <td>
                    <?php echo $row["password"]; ?>
                </td>
                <td><img src="<?php echo URL . "uploads/" . $row["image_url"]; ?>" alt="<?php $row["username"]; ?>"
                        width="150px" height="150px">
                </td>
                <td>
                    <?php echo $row["created_at"]; ?>
                </td>
                <td>
                    <a href="?action=UserDelete&id=<?= $row['id'] ?>">Delete</a>
                    <a href="<?php echo URL.'details.php?id='.$row['id']; ?>">Details</a>
                </td>

            </tr>
        <?php } ?>
    </table>

<?php } else {
    echo 'No results';
} ?>
<!-- <?php mysqli_data_seek($result, 0); ?>
<?php if (mysqli_num_rows($result) > 0) { ?>
    <table border="1">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td>
                    <?php echo $row["id"]; ?>
                </td>
                <td>
                    <?php echo $row["username"]; ?>
                </td>
                <td>
                    <?php echo $row["password"]; ?>
                </td>
                <td>
                    <?php echo $row["images_url"]; ?>
                </td>
                <td>
                    <?php echo $row["created_at"]; ?>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } else {
    echo 'No results';
} ?> -->





</body>
</html>



