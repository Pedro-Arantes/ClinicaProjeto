<?php

namespace app\controllers;

use app\core\Controller;



class HomeController extends Controller{

    

   public function index(){

       $dados["view"] = "index";

       $this->load("template",$dados);

   } 



 

}