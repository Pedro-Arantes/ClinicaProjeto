<?php

namespace app\models;
use app\core\Model;

class Login extends Model{

    public function confirma($user,$pass){

        $sql = "SELECT * FROM cadastros WHERE usuario = '$user'";
        $qry = $this->db->query($sql);
        $arrayqry = $qry->fetchALL(\PDO::FETCH_OBJ);
        $sqlpass = "SELECT * FROM cadastros WHERE senha = '$pass'";
        $qrypass = $this->db->query($sql);
        $arrayqryp = $qrypass->fetchALL(\PDO::FETCH_OBJ);

        /*print_r($arrayqry);
        echo "<br><hr>";
        print_r($arrayqryp);
        echo "<hr>";*/
        

        if ($arrayqry && $arrayqryp != null) {
            echo "Usuario e senha corretos!";
            echo "<hr>";
            $getacesso=$arrayqry[0];
            //print_r($getacesso) ;
            $acesso = $getacesso->nivelac ;
            
            header("location:".URL_BASE."login/redirect/{$acesso}");
        }else{
            "Usuario ou Senha incorretos!";
            header("location:".URL_BASE."login");
        }

    }

    public function contar(){

        $sqlPac = "SELECT * FROM pacientes";
        $sqlFunc = "SELECT * FROM funcionarios";
        $sqlCons = "SELECT * FROM consultas";
        $qryPac = $this->db->query($sqlPac);
        $qryFunc = $this->db->query($sqlFunc);
        $qryCons = $this->db->query($sqlCons);
        $arrayqryP = $qryPac->fetchALL(\PDO::FETCH_OBJ);
        $arrayqryF = $qryFunc->fetchALL(\PDO::FETCH_OBJ);
        $arrayqryC = $qryCons->fetchALL(\PDO::FETCH_OBJ);
        
        
        $CountPac = count($arrayqryP);
        $CountFunc = count($arrayqryF);
        $CountCons = count($arrayqryC);
  
        $this->CountPac =$CountPac;
        $this->CountFunc =$CountFunc;
        $this->CountCons =$CountCons;
  
        
    }
  

    
}