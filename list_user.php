<?php
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
                <td><img src="<?php echo URL . "uploads/" . $row["images_url"]; ?>" alt="<?php $row["username"]; ?>"
                        width="150px" height="150px">
                </td>
                <td>
                    <?php echo $row["created_at"]; ?>
                </td>
                <td>
                    <a href="#">Delete</a></td>
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