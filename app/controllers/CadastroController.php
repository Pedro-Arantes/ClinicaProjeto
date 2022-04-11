<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Cadastro;

class CadastroController extends Controller{
    
   public function index(){

      //instância do Model criada
        $objcadastro = new Cadastro();
        $dados["lista"] = $objcadastro->lista();
        $dados["view"] = "Cadastro/index";
         //echo "<pre>";
         //print_r($dados);
         //exit;
         $this->load("template",$dados);
       
   } 

   public function edit($id){
      $objcadastro = new Cadastro();
      $dados["cadastro"] = $objcadastro->getCadastro($id);
      $dados["view"] = "Cadastro/create";
      //echo "<pre>";
      //print_r($dados);
      //exit;

      $this->load("template",$dados);

   }

   //Criar método create
   public function create(){
      $dados["view"] = "Cadastro/create";
      $this->load("template",$dados);
       
   }

   public function salvar(){
    
      $objcadastro = new Cadastro();
      $cadastro = new \stdClass();
      $cadastro->usuario         = $_POST["usuario"];
      $cadastro->senha          = $_POST["senha"];
      $cadastro->nivelac        = $_POST["nivelac"];  
      
      
      
      
      
      
      $cadastro->idcadastro     =($_POST["idcadastro"]) ? $_POST["idcadastro"] : NULL;
      


      if($cadastro->idcadastro) {

            //chamar método do objcadastro
        $objcadastro->editar($cadastro);
           } else {
        $objcadastro->inserir($cadastro);
      }
     header("location:".URL_BASE."cadastro");
         

   }
  
   public function excluir($id){
      $objcadastro = new Cadastro();
      $objpaciente->excluir($id);
      header("location:".URL_BASE."cadastro");


   }

}