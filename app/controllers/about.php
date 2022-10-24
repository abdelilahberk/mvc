<?php

class About extends Controller {

    function index(){
        echo "Home page index method";
        $this->view("aboutt");
    }

    // function view($view){
    //     if (file_exists('./../app/views/'.$view.'.php')) {
    //         include './../app/views/'.$view.'.php';
    //         # code...
    //     }
    //     else{
            
    //         include './../app/views/404.php';

    //     }
    // }
}