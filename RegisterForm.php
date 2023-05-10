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

    <head>
        <?php
        // include_once ('header.php');
        // require_once ('header.php');
        
        ?>
    </head>
    <?php
    // //Encryption + luon luon + Salt de ma~ hoa' thanh ky' tu khac, hacker ko the lay dc password
    // $string = '123';
    // echo md5($string).'<br>';
    // echo sha1($string);
    // die;
    
    // echo '<pre>';
    // var_dump($_FILES);
    // echo '</pre>';
    
    $messager = [];
    if (isset($_POST['register'])) {
        $username = $_POST['username'] ?? null;
        if (empty($username)) {
            $messager[] = 'Username is requierd';
        }
        if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $messager[] = "Invalid email format";
        }

        $password = $_POST['password'] ?? null;
        if (empty($password)) {
            $messager[] = 'password is requierd';
        } else if (strlen(trim($password)) < 6) {
            $messager[] = 'Password at least 6 character';
        }

        $confirm_password = $_POST['confirm_password'] ?? null;
        if (empty($confirm_password) || $confirm_password !== $password) {
            $messager[] = "confirm password doesn't match";
        }
        //uniqid(true) de ma~ hoa' file hinh anh theo micro seconds
    
        if ($_FILES['avatar_url']) {
            $target_dir = "uploads/";
            $baseFileName = uniqid(true) . '_' .basename($_FILES["avatar_url"]["name"]);
            $target_file = $target_dir . $baseFileName;
            if (move_uploaded_file($_FILES["avatar_url"]["tmp_name"], $target_file)) {
                echo 'Upload thanh cong';
            } else {
                echo 'Upload that bai';
            }
        }

        if (!count($messager)) {
            //Validate Done
            echo $username . $password . $confirm_password;

            $password = sha1($password . '@NguyenVanTes!$');

            //Save date into Database
            //mysql - table user (id, username, password, created_at)
            //1 - nguyenvana@gmail.com - 123123 - 2023/05/05 20:30:00
            require('database.php');

            $date = date('Y-m-d H:i:s');

            $sql = sprintf("INSERT INTO user VALUES (null , '%s', '%s', '%s', '%s')", $username, $password, $baseFileName, $date);

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    ?>
    <div style="color:red;">
        <ul>
            <?php foreach ($messager as $m) { ?>
                <li>
                    <?= $m ?>
                </li>
            <?php } ?>
        </ul>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <div class="container register-form">
            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Your Name *" value="" />

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
            <button type="submit" value="Dang ky" name="register">Submit</button>
        </div>
        </div>
        </div>
    </form>
    <footer>
        <?php
        include_once('footer.php');
        include_once('footer.php');
        ?>
    </footer>



</body>

</html>