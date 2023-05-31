<?php 
    class NoteModel extends BaseModel {
        const TABLE = 'note';
        // private $connect;

        // public function __construct(){
        //     require_once './Core/Database.php';
        //     $db = new Database;
        //     $this->connect = $db->connect();
        // }
        public function getListNote(){
  
            $datas = $this->all(self::TABLE);
            // $sql = 'SELECT * FROM table_note'; // Truy xuat vao table in database
            // $results = mysqli_query($this->connect, $sql); // Lay duoc kq trong database
            
            // $data=[];
            //dung php de doc ra tung row trong database
        //     while($row=mysqli_fetch_assoc($results)){
        //         $datas[] = $row;
        //     }
            return $datas;
        }

        public function getDetail($id){
            $data = $this->find(self::TABLE, $id);
            return $data;
        }

        public function update($data, $id){
            return $this->updateItem($data, self::TABLE, $id);

        }
        // public function getListProductNewArrival(){
        //         return  [
        //             ['id'=> 4, 'name' => 'Iphone 1'],
        //             ['id'=> 5, 'name' => 'Iphone 3'],
        //             ['id'=> 6, 'name' => 'Iphone 4'],
        //         ];
        // }
        public function create($data){
            return $this->store($data, self::TABLE);
        }

        public function deleteItem($id){
            return $this->delete($id, self::TABLE);
        }


    }


?>