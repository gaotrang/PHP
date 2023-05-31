<h1>User Controller</h1>
<?php
    class UserController extends BaseController{

        private $userModel;
        public function __construct(){
            $this->loadModel('UserModel.php');
            $this->userModel = new UserModel;
        }
        public function index(){
            $users = $this->userModel->getListUser();
            return $this->view('user.list_user', ['users' => $users]);
        }
        public function create(){
            $errors = [];
            if(isset($_POST['create_user'])){
                //Validate data
                if(strlen(trim($_POST['name'])) === 0){
                    $errors['name'][] = "Name is required";
                }
                if(strlen(trim($_POST['email'])) === 0){
                    $errors['email'][] = "Email is required";
                }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    $errors['email'][]= "Email is invalid";
                }else{
                    $checkUser = $this->userModel->checkUser($_POST['email']);

                    if($checkUser === true){
                        $errors['email'][] = 'Email exited in system';
                    }
                }
                if(strlen(trim($_POST['password'])) < 6){
                    $errors['password'][] = "Password is at least 6 character";
                }

                if(count($errors) > 0){
                    return $this->view('user.create_user', ['errors' => $errors]);
                }
                //Fresh data
                $data = [
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'password' => sha1($_POST['password'].'gaotrang')
                ];
                $check = $this->userModel->create($data);

                if($check){
                    header('Location: '.URL.'?url=user/index');
                }else{
                    throw new \Exception('Create note something went wrong');
                }
            }

           
            return $this->view('user.create_user');
        }
        public function login(){

                if (isset($_POST['login'])) {
                    $username = $_POST['username'] ?? null;
                    $password = $_POST['password'] ?? null; //password raw
            
                    $username = trim($username);
                    $username = htmlspecialchars($username);
                    $username = strip_tags($username);
            
                    $password = sha1($password . 'gaotrang');

                    $check = $this->userModel->checkLogin($username, $password);

                    if($check){
                        header('Location: '.URL.'?url=user/index');
                    }else{
                        return $this->view('user.login', ['errors' => 'Username or password is invalid']);
                    }
                }
            return $this->view('user.login');
        }
    }

?>

