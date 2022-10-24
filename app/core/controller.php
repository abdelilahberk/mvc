<?php 
class Controller{

    function view($view){
        if (file_exists('./../app/views/'.$view.'.php')) {
            include './../app/views/'.$view.'.php';
            # code...
        }
        else{
            
            include './../app/views/404.php';

        }
    }
    function loadmodel($model){
        if (file_exists('./../app/models/'.$model.'.php')) {
            include './../app/models/'.$model.'.php';
            return $model = new $model();
            # code...
        }
       return false;
    }
}