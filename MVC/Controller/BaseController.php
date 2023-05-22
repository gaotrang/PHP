<?php
    class BaseController{

        const VIEW_FOLDER = 'Views';

        public function view($path){
            //user.list_user
            //./Views/user/list_user.php
            $path = str_replace('.','/', $path); //user/list_user
            $path .= '.php'; //user/list_user.php
            $path = './'.self::VIEW_FOLDER.'/'.$path;

            return require $path;
        }
    }

?>