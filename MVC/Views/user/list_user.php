<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List User</h1>
    <table border=1>
        <tr>
            <th>STT</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php foreach($users as $key => $user): ?>
            <tr>
                <td><?= $key+1?></td>
                <td><?= $user['id']?></td>
                <td><?= $user['email']?></td>
                <td><?= $user['created_at']?></td>
                <td>
                    <a href="<?= URL.'?url=user/detail/'.$note['id']?>">Update</a>
                    <a onclick=" return confirm('Are you sure?')" href="<?= URL.'?url=user/delete/'.$user['id']?>">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>
    </table>
</body>
</html>