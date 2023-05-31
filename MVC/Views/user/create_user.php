<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create User</h1>
    <form action="" method="POST" >

        <input type="text" name="name" placeholder="Name" />
        <?php echo showError($errors ?? [], 'name'); ?>
        <br>
        <input type="email" name="email" placeholder="Email" />
        <?php echo showError($errors ?? [], 'email'); ?>
        <br>
        <input type="password" name="password" placeholder="Password" />
        <?php echo showError($errors ?? [], 'password'); ?>
        <br>
        <input type="submit" value="Create" name="create_user" />
    </form>
</body>
</html>