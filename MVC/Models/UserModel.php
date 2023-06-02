<?php 
    class UserModel extends BaseModel {

        const TABLE = 'user';

        public function getListUser(){
            $datas = $this->all(self::TABLE);
            return $datas;
        }
        public function create($data){

            return $this->store($data, self::TABLE);

        }
        public function getDetail($id){
            $data = $this->find(self::TABLE, $id);
            return $data;
        }
        public function checkUser($email){
            $data = $this->checkUserExists(self::TABLE, $email);
            return $data;
        }
        public function attempLogin($email, $password){
            return $this->checkLogin($email, $password);
        }
    }


    //uu diem cua mvc:
    // - phan chia ro rang nen de quan li
    //- de bao tri
    //nhuoc diem: mat cong suc code nhiu file, 
?>