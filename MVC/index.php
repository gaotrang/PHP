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
        // in array trong php dung lenh print_r
        define('URL','http://localhost/php/mvc/index.php');
        require './Helpers/helper.php';
        require './Controller/BaseController.php';
        require './Models/BaseModel.php';
        require './Core/App.php';
        require './Core/Database.php';

        $db = new Database;
        $connect = $db->connect();


        $app = new App;
        // // $controller = $_GET['controller'] ?? 'user';
        // // $action = $_GET['action'] ?? 'index';

        // //bien 1 chuoi thanh tung phan tu = explode
        // //ucfirst tung phan tu
        // // ?? neu ko co tu url thi se tu dong chuyen ve user
        // $url = $_GET['url'] ?? 'user';
        // $controller = explode('/',$url)[0];
        // $action = explode('/',$url)[1] ?? 'index';


        // if(str_contains($controller, '_')){
        //     $valuesList = array_map(function($v){
        //         return ucfirst($v);
        //     }, explode('_', $controller));
        //     // explode de bien string thanh array
        //     $controller = implode('', $valuesList);
        //     // implode de bien array lai thanh string
        // }else{
        //     $controller = ucfirst($controller);
        // }

        // $url = './Controller/'.ucfirst($controller).'Controller.php';

        // require $url;

        // $controllerName = $controller.'Controller';
        // $controllerObj = new $controllerName;
        // $controllerObj->$action();
        // echo'<pre>'.var_dump($controllerObj);die;

        // dd($controllerObj);
        // $userController = new UserController;
        // $userController->index();
        // $userController->create();   
    ?>
    <a href="index.php?url=user/index">List User</a><br>
    <a href="index.php?url=user/create">Create User</a><br>
    <a href="index.php?url=product_category/index">List Product Category</a><br>
    <a href="index.php?url=product_category/create">Create Product Category</a><br>
    <a href="index.php?url=product/index">List Products</a><br>
    <a href="index.php?url=product/create">Create Products</a><br>
    <a href="index.php?url=note/index">List Note</a><br>
    <a href="index.php?url=note/create">Create Note</a><br>
</body>
</html>


