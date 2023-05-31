<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Note</h1>
    <form action="" method="POST" >
        <label>Content</label>
        <br>
        <textarea name="content"></textarea>
        <?php echo showError($errors ?? [], 'content'); ?>
        <br>
        <label>List User</label>
        <br>
        <select name="user_id">
            <option value="0">----Please Select----</option>
            <?php foreach($users as $key => $user): ?>
                <option value="<?= $user['id'] ?>"><?= $user['id'].' - '.$user['name'].' - '.$user['email']?>
                <?php endforeach ?>
        </select>
        <?php echo showError($errors ?? [], 'user_id'); ?>
        <br>
        <input type="submit" value="Create" name="create_note" />
    </form>
</body>
</html>