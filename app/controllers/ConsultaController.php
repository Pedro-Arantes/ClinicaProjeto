<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Consulta;

class ConsultaController extends Controller{
    
   public function index(){

      //instância do Model criada
        $objconsulta = new Consulta();
        $dados["lista"] = $objconsulta->lista();
        $dados["view"] = "Consulta/index";
         //echo "<pre>";
         //print_r($dados);
         //exit;
         $this->load("tempdoc",$dados);
       
   } 

   public function edit($id){
      $objconsulta = new Consulta();
      $dados["consulta"] = $objconsulta->getConsulta($id);
      $dados["view"] = "Consulta/create";
      //echo "<pre>";
      //print_r($dados);
      //exit;

      $this->load("tempdoc",$dados);

   }

   //Criar método create
   public function create(){
      $dados["view"] = "Consulta/create";
      $this->load("template",$dados);
       
   }

   public function salvar(){
    
      $objconsulta = new Consulta();
      $consulta = new \stdClass();
      $consulta->dtcons        = $_POST["dtcons"];
      $consulta->hrcons          = $_POST["hrcons"];
      $consulta->status        = $_POST["status"];  
      $consulta->medico          = $_POST["medico"];
      $consulta->paciente          = $_POST["paciente"];
      $consulta->sala          = $_POST["sala"];
      
      
      
      
      
      $consulta->idconsulta     =($_POST["idconsulta"]) ? $_POST["idconsulta"] : NULL;
      


      if($consulta->idconsulta) {

            //chamar método do objconsulta
        $objconsulta->editar($consulta);
           } else {
        $objconsulta->inserir($consulta);
      }
     header("location:".URL_BASE."consulta");
         

   }
  
   public function excluir($id){
      $objconsulta = new Consulta();
      $objconsulta->excluir($id);
      header("location:".URL_BASE."consulta");


   }

}