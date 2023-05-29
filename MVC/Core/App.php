<?php
    class App {
        private $controller='product';
        private $action='index';
        private $params = '';

        public function __construct(){
            if(isset($_GET['url'])){
                // user/index
                $url = explode('/',$_GET['url']);
                if(isset($url[0])){

                    if(str_contains($url[0],'_')){
                        $valueList = array_map(function($v){
                            return ucfirst($v);
                        }, explode('_', $url[0]));
                        $controller = implode('',$valueList);
                    }else{
                        $controller = ucfirst($url[0]);
                    }

                    $this->controller = $controller.'Controller';
                    
                }

                require_once './Controller/'.$this->controller.'.php';
               

                if(isset($url[1])){
                    $this->action = $url[1];
                }

                if(isset($url[2])){
                    $this->params = $url[2];
                }

                // var_dump($this->controller);
                // $controllerObj = new $this->controller();
                // $action = $this->action;
                // $controllerObj->$action($this->params);

                $this->controller = new $this->controller();
                // var_dump($this->action);
                //Ham call_user... se bien 1 array thanh string

                call_user_func_array([$this->controller, $this->action],[$this->params]);
            }
        }

    }

?>