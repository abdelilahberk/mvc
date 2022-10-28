<?php

class Home extends Controller{

    function index($a,$b,$c=''){  
 
         $image_class = $this->loadmodel("image_class");
         show($a);
         show($b);
         show($c);
        $this->view("home");
    }

   
}