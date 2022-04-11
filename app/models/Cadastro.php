<?php

namespace app\models;
use app\core\Model;

class Cadastro extends Model{



    public function lista(){
       //instrução sql
       $sql = "SELECT * FROM cadastros";
       $qry = $this->db->query($sql);
       return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function inserir($cadastro){
        //$usuario = $_POST["usuario"];
        //INSERT INTO cadastro (usuario,idade) values ('$usuario','$idade');

        $sql = "INSERT INTO cadastros SET
            usuario        =:usuario,
            senha         =:senha,
            nivelac       =:nivelac
           
            
            
            
        ";
        $qry = $this->db->prepare($sql);

        $qry->bindValue(":usuario", $cadastro->usuario);
        $qry->bindValue(":senha", $cadastro->senha);
        $qry->bindValue(":nivelac", $cadastro->nivelac);
        
        
        
        

        $qry->execute();

        return $this->db->lastInsertId();


    }
    public function getCadastro($id){
        $sql = "SELECT * FROM cadastros where idcadastro = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($cadastro){
        $sql = " UPDATE cadastros set
        usuario =:usuario,
        senha=:senha,
        nivelac=:nivelac
        
       
        
        where idcadastro =:id
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":usuario", $cadastro->usuario);
        $qry->bindValue(":senha", $cadastro->senha);
        
        $qry->bindValue(":nivelac", $cadastro->nivelac);
        
        
        
        
        $qry->bindValue(":id", $cadastro->idcadastro);
        $qry->execute();

        return $cadastro->idcadastro;
       
    }

    public function excluir($id){
        $sql = "DELETE FROM cadastros where idcadastro = $id";
        $qry = $this->db->query($sql);
    }
}