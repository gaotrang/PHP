<?php 
    class UserModel {
        public function getListProductHot(){
            return  [
                ['id'=> 1, 'name' => 'Iphone 12'],
                ['id'=> 2, 'name' => 'Iphone 13'],
                ['id'=> 3, 'name' => 'Iphone 14'],
            ];
        }
        public function getListProductNewArrival(){
                return  [
                    ['id'=> 4, 'name' => 'Iphone 1'],
                    ['id'=> 5, 'name' => 'Iphone 3'],
                    ['id'=> 6, 'name' => 'Iphone 4'],
                ];
        }
    }


    //uu diem cua mvc:
    // - phan chia ro rang nen de quan li
    //- de bao tri
    //nhuoc diem: mat cong suc code nhiu file, 
?>