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

    
}