<?php

//WPU Selesai assets

class App {
    protected $ctrlDir;
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->parseURL();
        $this->ctrlDir = str_replace('\\public','\\app\\controllers\\',getcwd()).$url[0].'.php';

        // var_dump($this->parseURL());
        // var_dump($this->ctrlDir);
        // var_dump('D:\xampp\htdocs\Proyek1\Develop\app\controllers\Home.php');
        
        if(file_exists($this->ctrlDir)){
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once $this->ctrlDir;
        $this->controller = new $this->controller;

        if(isset($url[1])){
            if (method_exists($this->controller,$url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        if (!empty($url)) {
            $this->params = array_values($url);
            // var_dump($this->params);
        }

        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    public function parseURL(){
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
        return ['Home'];
    }
}