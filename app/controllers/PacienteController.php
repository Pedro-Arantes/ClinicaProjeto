<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Paciente;

class PacienteController extends Controller{
    
   public function index(){

      //instância do Model criada
        $objpaciente = new Paciente();
        $dados["lista"] = $objpaciente->lista();
        $dados["view"] = "Paciente/indexpac";
         //echo "<pre>";
         //print_r($dados);
         //exit;
         $this->load("template",$dados);
       
   } 

   public function edit($id){
      $objpaciente = new Paciente();
      $dados["paciente"] = $objpaciente->getPaciente($id);
      $dados["view"] = "Paciente/createpac";
      //echo "<pre>";
      //print_r($dados);
      //exit;

      $this->load("template",$dados);

   }

   //Criar método create
   public function create(){
      $dados["view"] = "Paciente/createpac";
      $this->load("template",$dados);
       
   }

   public function salvar(){
    
      $objpaciente = new Paciente();
      $paciente = new \stdClass();
      $paciente->nome         = $_POST["nome"];
      $paciente->cpf          = $_POST["cpf"];
      $paciente->plano        = $_POST["plano"];  
      $paciente->cel          = $_POST["cel"];
      
      
      
      
      
      $paciente->idpaciente     =($_POST["idpaciente"]) ? $_POST["idpaciente"] : NULL;
      


      if($paciente->idpaciente) {

            //chamar método do objpaciente
        $objpaciente->editar($paciente);
           } else {
        $objpaciente->inserir($paciente);
      }
     header("location:".URL_BASE."paciente");
         

   }
  
   public function excluir($id){
      $objpaciente = new Paciente();
      $objpaciente->excluir($id);
      header("location:".URL_BASE."paciente");


   }

}