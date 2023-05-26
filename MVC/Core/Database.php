<?php
    class Database{
        const HOST='localhost';
        const USERNAME='root';
        const PASSWORD='';
        const DB_NAME='mvc';
        const PORT=3307;

        private $connect;
        public function connect(){
            try{
                $this->connect=mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DB_NAME, self::PORT,);

                mysqli_set_charset($this->connect, 'utf8');

                if(mysqli_connect_errno() === 0){
                    return $this->connect;
                }

                throw new Exception('Unable to connect');

            }catch(\Exception $e){ 
                //Neu khong biet chinh xac loi gi thi goi \Exception cha de bao trum all cac error
                // neu doan code tren bi loi thi se throw ra loi do
                throw new \Exception($e->getMessage());
            }
        }
    }
?>