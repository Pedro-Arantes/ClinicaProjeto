<?php

namespace app\models;
use app\core\Model;

class Reserva extends Model{



    public function lista(){
       //instrução sql
       $sql = "SELECT * FROM reservas";
       $qry = $this->db->query($sql);
       return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function inserir($reserva){
        //$nome = $_POST["nome"];
        //INSERT INTO reserva (nome,idade) values ('$nome','$idade');

        $sql = "INSERT INTO reservas SET
            dtreser        =:dtreser,
            medico         =:medico,
            sala           =:sala
            
            
            
            
        ";
        $qry = $this->db->prepare($sql);

        $qry->bindValue(":dtreser", $reserva->dtreser);
        $qry->bindValue(":medico", $reserva->medico);
        $qry->bindValue(":sala", $reserva->sala);
        
        
        
        

        $qry->execute();

        return $this->db->lastInsertId();


    }
    public function getPaciente($id){
        $sql = "SELECT * FROM reservas where idreserva = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($reserva){
        $sql = " UPDATE reservas set
        dtreser  =:dtreser,
        medico   =:medico,
        plano    =:plano
        
       
        
        where idreserva =:id
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":dtreser", $reserva->dtreser);
        $qry->bindValue(":medico", $reserva->medico);
        
        $qry->bindValue(":sala", $reserva->sala);
        
        
        
        
        $qry->bindValue(":id", $reserva->idreserva);
        $qry->execute();

        return $reserva->idreserva;
       
    }

    public function excluir($id){
        $sql = "DELETE FROM reservas where idreserva = $id";
        $qry = $this->db->query($sql);
    }

    public function confirma($date,$room){

        $sql = "SELECT * FROM reservas WHERE dtreser = '$date' and sala = '$room'";
        $qry = $this->db->query($sql);
        
        $arrayqry = $qry->fetchALL(\PDO::FETCH_OBJ);
        $arrayelem = count($arrayqry);
        //$sqlpass = "SELECT * FROM reservas WHERE sala = '$room'";
        //$qrypass = $this->db->query($sql);
        //$arrayqryp = $qrypass->fetchALL(\PDO::FETCH_OBJ);
        
        //$arrayeleme = count($arrayqryp) ;

        

        if ($arrayelem   === 0) {

            
                return true;
                $resp = true;
            
            
            //$getacesso=$arrayqry[0];
            //print_r($getacesso) ;
            //$acesso = $getacesso->nivelac ;
            
            
        }else{
            return false;
            //header("location:".URL_BASE."reserva/msg");
        } 

              

    }
}