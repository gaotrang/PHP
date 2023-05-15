<?php define('URL', 'http://localhost/PHP/list_user.php/'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <h2>Cap nhat tai khoan</h2>
    <?php
    require_once('header.php');
    require('database.php');
    require('prepareStatement.php');

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = 'SELECT * FROM user WHERE id ='.$id;
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $username = $row['username'];
                       
        }
        if(isset($_POST['update'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password = sha1($password . '@NguyenVanTes!$');

            $baseFileName = null;

            if(isset($_FILES['avatar_url']) && !empty($_FILES['avatar_url']['tmp_name'])){
                $target_dir = "uploads/";
                $baseFileName = uniqid(true) . '_' .basename($_FILES["avatar_url"]["name"]); //name unique
                $target_file = $target_dir . $baseFileName;
                if (move_uploaded_file($_FILES["avatar_url"]["tmp_name"], $target_file)) {
                    echo 'Upload thanh cong';
                    //Remove old image in storage
                    //unlink('uploads/'.$nameFile);
                } else {
                    echo 'Upload that bai';
                }
            }

            $arrayData = [
                'username' => $username,
                'password' => $password,
            ];
            
            if(!is_null($baseFileName)){
                $arrayData['image_url'] = $baseFileName;
            }

            $sql = prepareUpdateStatement($arrayData, 'user', $_GET['id']);

            //check duplicate entry data
            // if(!is_null($baseFileName)){
            //     $sql = "UPDATE user SET username='".$username."', password='".$password."', image_url='".$baseFileName."'WHERE id=".$_GET['id'];
            // }else{
            //     $sql = "UPDATE user SET username='".$username."', password='".$password."'"." WHERE id=".$_GET['id'];
            // }
            
            $result = mysqli_query($conn, $sql);
            echo $result ? 'Update thanh cong' : 'Update that bai';
            if($result === true){
                header('Location : '.URL.'list_user.php');
            }
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <div class="container register-form">
            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Your Name *" value=<?php echo $username ?? ''?>>

                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Your Password *" value="" />

                        </div>
                        <div class="form-group">
                            <input type="password" name="confirm_password" placeholder="Confirm Password *" value="" />
                        </div>

                        <div class="form-group">
                            <input type="file" placeholder="Password *" name="avatar_url" />
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" value="Cap nhat" name="update">Update</button>
        </div>
        </div>
        </div>
    </form>
    <footer>
        <?php
        include_once('footer.php');
      
        ?>
    </footer>



</body>

</html>