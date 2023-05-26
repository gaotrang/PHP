
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List Note</h1>
    
    <table border=1>
        <tr>
            <th>STT</th>
            <th>ID</th>
            <th>Content</th>
            <th>User Id</th>
            <th>Create At</th>
            <th>Action</th>
        </tr>
        <?php foreach($notes as $key => $note): ?>
            <tr>
                <td><?= $key+1?></td>
                <td><?= $note['id']?></td>
                <td><?= $note['content']?></td>
                <td><?= $note['user_id']?></td>
                <td><?= $note['created_at']?></td>
                <td>
                    <a href="<?= URL.'?url=note/detail/'.$note['id']?>">Detail</a>
                </td>
            </tr>
            <?php endforeach ?>
    </table>
</body>
</html>