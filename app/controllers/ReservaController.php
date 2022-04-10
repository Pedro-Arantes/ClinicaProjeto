<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Reserva;

class ReservaController extends Controller{
    
   public function index(){

      //instância do Model criada
        $objReserva = new Reserva();
        $dados["lista"] = $objReserva->lista();
        $dados["view"] = "Reserva/index";
         //echo "<pre>";
         //print_r($dados);
         //exit;
         $this->load("template",$dados);
       
   } 

   public function edit($id){
      $objReserva = new Reserva();
      $dados["reserva"] = $objReserva->getReserva($id);
      $dados["view"] = "Reserva/create";
      //echo "<pre>";
      //print_r($dados);
      //exit;

      $this->load("temp",$dados);

   }

   //Criar método create
   public function create(){
      $dados["view"] = "Reserva/create";
      $this->load("template",$dados);
       
   }

   public function salvar(){

    $objReserva = new Reserva();
    $reserva = new \stdClass();

    $reserva->dtreser         = $_POST["dtreser"];
    $reserva->medico          = $_POST["medico"];
    $reserva->sala            = $_POST["sala"];
      
    $reserva->idreserva     =($_POST["idreserva"]) ? $_POST["idreserva"] : NULL;
    $resposta = $objReserva->confirma($reserva->dtreser,$reserva->sala);
      //var_dump($resposta);
        if ($resposta==true) {
            if($id) {

                //cchamar método do objcontato
            $objReserva->editar($reserva);
            } else {
            $objReserva->inserir($reserva);
            }
            
        }else {
            
            header("location:".URL_BASE."reserva/msg");
        }


      
      
      
        
            
         
        
        

      
         

    }
  
   public function excluir($id){
      $objReserva = new Reserva();
      $objReserva->excluir($id);
      header("location:".URL_BASE."reserva");


   }
   public function msg(){

    $dados["view"] = "Reserva/msg";
    $this->load("template",$dados);
   }
   public function verif($a,$b){
        $objReserva = new Reserva();
        
        $objReserva->confirma($a,$b);
   }

}