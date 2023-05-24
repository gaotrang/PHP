<?php
    class BaseController{

        const VIEW_FOLDER = 'Views';
        const VIEW_MODEL = 'Models';
        // $datas is created in this page
        public function view($path, $datas = []){
            //user.list_user
            //./Views/user/list_user.php
            $path = str_replace('.','/', $path); //user/list_user
            $path .= '.php'; //user/list_user.php
            $path = './'.self::VIEW_FOLDER.'/'.$path;

            foreach ($datas as $key => $data){
                $$key = $data;
            }

            return require $path;
        }
        protected function loadModel($path){
            return require './'.self::VIEW_MODEL.'/'.$path;
        }
    }

?>