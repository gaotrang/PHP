
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update User</h1>
    <form action="" method="POST" >
        <label>User Name</label>
        <?php echo showError($errors ?? [], 'name'); ?>
        <br>
        <label>Email</label>
        <?php echo showError($errors ?? [], 'email'); ?>
        <br>
        <input type="hidden" name="id" value="<?= $note['id']?>" />
        <input type="submit" value="Update" name="update_user" />
    </form>
</body>
</html>