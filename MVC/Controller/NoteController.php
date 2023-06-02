<h1>Note Controller</h1>
<?php
    class NoteController extends BaseController{
        private $userModel;
        private $noteModel;
        public function __construct(){
            $this->loadModel('NoteModel.php');
            $this->noteModel = new NoteModel;
            $this->loadModel('UserModel.php');
            $this->userModel = new UserModel;
        }
        public function index(){

            $userID = $_SESSION['id'] ?? null;
            $notes = $this->noteModel->getListNoteByUserID($userID);

            return $this->view('note.list_note', ['notes' => $notes]);
        }
        public function create(){

            $errors = [];

            if(isset($_POST['create_note'])){
                //Validate input data
                if(strlen(trim($_POST['content'])) === 0 ){
                    $errors['content'][] = 'Content is required';
                }
                if($_POST['user_id'] === '0'){
                    $errors['user_id'][] = 'User Id is required';
                }

                if(count($errors) > 0){
                    return $this->view('note.create_note', ['errors' => $errors]);
                }
                //Fresh Data
                $data = [
                    'content' => $_POST['content'],
                    'user_id' => $_POST['user_id'],
                ];
                $check = $this->noteModel->create($data);
                if($check){
                    header('Location: '.URL.'?url=note/index');
                }else{
                    throw new \Exception('Create note something went wrong');
                }
            }
            $users = $this->userModel->getListUser();
            return $this->view('note.create_note',['users' => $users]);
        }
        public function detail($id){
            $errors = [];

            if(isset($_POST['update_note'])){
                //Validate input data
                if(strlen(trim($_POST['content'])) === 0 ){
                    $errors['content'][] = 'Content is required';
                }
                if($_POST['user_id'] === '0'){
                    $errors['user_id'][] = 'User Id is required';
                }

                if(count($errors) > 0){
                    return $this->view('note.detail_note', ['errors' => $errors]);
                }
                //Fresh Data
                $data = [
                    'content' => $_POST['content'],
                    'user_id' => $_POST['user_id'],
                ];

                $id = $_POST['id'];
                $check = $this->noteModel->update($data, $id);

                if($check){
                    header('Location: '.URL.'?url=note/index');
                }else{
                    throw new \Exception('Create note something went wrong');
                }
            }
            $note = $this->noteModel->getDetail($id);

            if(is_null($note)){
                return $this->view('pages.404');
            }
            $userID = $_SESSION['id'] ?? null;
            if($userID == $note['user_id']){
                return $this->view('note.detail_note', ['note' => $note]);
            }else{
                return $this->view('pages.403');
            }
            
            // $note = $this->noteModel->getDetail($id);
            // return $this->view('note.detail_note', ['note' => $note]);

            // $sql = 'SELECT * FROM note where id='.$id;
            // var_dump($sql);die;
        }

        public function delete($id){
            $check = $this->noteModel->deleteItem($id);
            if($check){
                header('Location: '.URL.'?url=note/index');
            }else{
                throw new \Exception('Delete note something went wrong');
            
            }
        }

    }



?>




