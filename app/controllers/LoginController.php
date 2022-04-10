<?php

namespace app\controllers;

use app\core\Controller;

use app\models\Login;


class LoginController extends Controller{

   public $pacientes;
   public $funcionarios;
   public $consultas;    

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

   public function IniciarContagem(){

      $objLogin = new Login();
      $objLogin->contar();

      
      print_r($objLogin);
      $this->pacientes= $objLogin->CountPac;
      $this->funcionarios= $objLogin->CountFunc;
      $this->consultas= $objLogin->CountCons;
      
    }

   



 

}