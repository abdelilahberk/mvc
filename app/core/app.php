<?php

class App
{
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];
    function __construct()
    {
        // echo 'app class ';
        // echo "aaa";
        $url = $this->spliturl();

        if(file_exists('./../app/controllers/'.strtolower($url[0]).'.php')){
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }
        // show($url);

        // print_r($this->controlle);
        // die();

        require './../app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller,strtolower($url[1]))) {
                # code...
                $this->method = strtolower($url[1]);
                unset($url[1]);
            }
            
        }
        $this->params =array_values($url);
        call_user_func_array([$this->controller,$this->method],$this->params);
        // show($url);
    }

    private function spliturl()
    {
        $url = isset($_GET["url"]) ? $_GET["url"] : "home";
        return explode("/",trim($url,"/"));
    }
}
