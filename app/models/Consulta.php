<?php

namespace app\models;
use app\core\Model;

class Consulta extends Model{



    public function lista(){
       //instrução sql
       $sql = "SELECT * FROM consultas";
       $qry = $this->db->query($sql);
       return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function inserir($consulta){
        //$dtcons = $_POST["dtcons"];
        //INSERT INTO consulta (dtcons,idade) values ('$dtcons','$idade');

        $sql = "INSERT INTO consultas SET
            dtcons        =:dtcons,
            hrcons         =:hrcons,
            status       =:status,
            medico         =:medico,
            paciente       =:paciente,
            sala       =:sala
            
            
            
        ";
        $qry = $this->db->prepare($sql);

        $qry->bindValue(":dtcons", $consulta->dtcons);
        $qry->bindValue(":hrcons", $consulta->hrcons);
        $qry->bindValue(":status", $consulta->status);
        $qry->bindValue(":medico", $consulta->medico);
        $qry->bindValue(":paciente", $consulta->paciente);
        $qry->bindValue(":sala", $consulta->sala);
        
        
        

        $qry->execute();

        return $this->db->lastInsertId();


    }
    public function getConsulta($id){
        $sql = "SELECT * FROM consultas where idconsulta = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($consulta){
        $sql = " UPDATE consultas set
        dtcons =:dtcons,
        hrcons=:hrcons,
        status=:status,
        medico=:medico,
        paciente=:paciente,
        sala=:sala
       
        
        where idconsulta =:id
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":dtcons", $consulta->dtcons);
        $qry->bindValue(":hrcons", $consulta->hrcons);
        
        $qry->bindValue(":status", $consulta->status);
        $qry->bindValue(":medico", $consulta->medico);
        $qry->bindValue(":paciente", $consulta->paciente);
        $qry->bindValue(":sala", $consulta->sala);
        
        
        
        $qry->bindValue(":id", $consulta->idconsulta);
        $qry->execute();

        return $consulta->idconsulta;
       
    }

    public function excluir($id){
        $sql = "DELETE FROM consultas where idconsulta = $id";
        $qry = $this->db->query($sql);
    }
}