<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Trang chu</h1>

    <?php
        require './Helpers/helper.php';
        require './Controller/BaseController.php';

        $controller = $_GET['controller'] ?? 'user';
        $action = $_GET['action'] ?? 'index';
        //bien 1 chuoi thanh tung phan tu = explode
        //ucfirst tung phan tu


        if(str_contains($controller, '_')){
            $valuesList = array_map(function($v){
                return ucfirst($v);
            }, explode('_', $controller));

            $controller = implode('', $valuesList);
        }else{
            $controller = ucfirst($controller);
        }

        $url = './Controller/'.ucfirst($controller).'Controller.php';

        require $url;

        $controllerName = $controller.'Controller';
        $controllerObj = new $controllerName;
        $controllerObj->$action();
        // echo'<pre>'.var_dump($controllerObj);die;

        dd($controllerObj);
        // $userController = new UserController;
        // $userController->index();
        // $userController->create();
    
    
    ?>
    <a href="index.php?controller=user&action=index">List User</a><br>
    <a href="index.php?controller=user&action=create">Create User</a><br>
    <a href="index.php?controller=product_category&action=index">List Product Category</a><br>
    <a href="index.php?controller=product_category&action=create">Create Product Category</a><br>
    <a href="index.php?controller=product&action=index">List Products</a><br>
    <a href="index.php?controller=product&action=create">Create Products</a><br>
    <a href="index.php?controller=note&action=index">List Note</a><br>
    <a href="index.php?controller=note&action=create">Create Note</a><br>
</body>
</html>