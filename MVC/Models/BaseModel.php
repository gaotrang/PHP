<?php
    class BaseModel{
        // chuyen private thanh protected de cac thang con co the access vao thang cha
        protected $connect;

        public function __construct(){
            require_once './Core/Database.php';
            $db = new Database;
            $this->connect = $db->connect();
        }

        public function all($table = 'note'){
            $sql = "SELECT * FROM $table"; // Truy xuat vao table in database
            $results = mysqli_query($this->connect, $sql); // Lay duoc kq trong database
            $data=[];

            //dung php de doc ra tung row trong database
            while($row=mysqli_fetch_assoc($results)){
                $datas[] = $row;
            }
            return $datas;
        }
        public function find($table, $id){
            $sql = "SELECT * FROM $table WHERE id = $id";
            $results = mysqli_query($this->connect, $sql);
            $data = mysqli_fetch_assoc($results);
            return $data;
        }
    }
?>