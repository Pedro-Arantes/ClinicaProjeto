<?php

namespace app\models;
use app\core\Model;

class Paciente extends Model{



    public function lista(){
       //instrução sql
       $sql = "SELECT * FROM pacientes";
       $qry = $this->db->query($sql);
       return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function inserir($paciente){
        //$nome = $_POST["nome"];
        //INSERT INTO paciente (nome,idade) values ('$nome','$idade');

        $sql = "INSERT INTO pacientes SET
            nome        =:nome,
            cpf         =:cpf,
            plano       =:plano,
            cel         =:cel
            
            
            
        ";
        $qry = $this->db->prepare($sql);

        $qry->bindValue(":nome", $paciente->nome);
        $qry->bindValue(":cpf", $paciente->cpf);
        $qry->bindValue(":plano", $paciente->plano);
        $qry->bindValue(":cel", $paciente->cel);
        
        
        

        $qry->execute();

        return $this->db->lastInsertId();


    }
    public function getPaciente($id){
        $sql = "SELECT * FROM pacientes where idpaciente = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($paciente){
        $sql = " UPDATE pacientes set
        nome =:nome,
        cpf=:cpf,
        plano=:plano,
        cel=:cel
       
        
        where idpaciente =:id
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":nome", $paciente->nome);
        $qry->bindValue(":cpf", $paciente->cpf);
        
        $qry->bindValue(":plano", $paciente->plano);
        $qry->bindValue(":cel", $paciente->cel);
        
        
        
        $qry->bindValue(":id", $paciente->idpaciente);
        $qry->execute();

        return $paciente->idpaciente;
       
    }

    public function excluir($id){
        $sql = "DELETE FROM pacientes where idpaciente = $id";
        $qry = $this->db->query($sql);
    }
}