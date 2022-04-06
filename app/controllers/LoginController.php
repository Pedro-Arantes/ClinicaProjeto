<?php

namespace app\controllers;

use app\core\Controller;

use app\models\Login;


class LoginController extends Controller{

    

   public function index(){

       $dados["view"] = "login";

       $this->load("template",$dados);

   } 

   public function valida(){

      $objpaciente = new Login();
      $paciente = new \stdClass();
      $paciente->usuario         = $_POST["usuario"];
      $paciente->senha          = $_POST["senha"];
      
      $objpaciente->confirma($paciente->usuario,$paciente->senha);
   }

   public function redirect($nivel){

    

    $dados["view"] = $nivel;

    $this->load("temp",$dados);
         
       
   }

   



 

}