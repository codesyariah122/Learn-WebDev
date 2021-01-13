<?php
class App {
    protected $controller='Home';
    protected $method='index';
    protected $params=[];

    public function __construct()
    {
        $url = $this->parseURL();
        //controller
        if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
            $this->controller = ucwords($url[0]);
            unset($url[0]);
            //var_dump($this->controller);
        }   
            require_once ('../app/controllers/'.$this->controller.'.php');
            $this->controller =  new $this->controller;
            //method
            if(isset($url[1])){
                if(method_exists($this->controller, ucwords($url[1]))){
                    $this->method = ucwords($url[1]);
                    unset($url[1]);
                }
            }

            //parameters
            if(!empty($url)){
                $this->params = array_values($url);
            }

            //jalankan controller dan method serta kirimkan params jika ada
            call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function parseURL()
    {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = FILTER_VAR($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}