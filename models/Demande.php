<?php

namespace App\Model;

use App\Core\Model;

class Demande extends Model
{
    private string $etat;
    private string $motif;
    private int $date;

public function RP():array
{
    return [];
}

public function etudiant():array
{
    return [];
}




    /**
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }


    public function insert():int
    {
    $db=self:: database();
    $db->connexionBD();
    $sql="INSERT INTO `demande` ( `etat`,`motif`,`date`) VALUES (?,?,?)";
    $result=$db->ExecuteUpdate($sql,[$this->etat,$this->motif,$this->date]);
    $db->CloseConnexion();
    return $result;
    
  }


    public  static function findAll():array{
        
      $db=self::database();
      
      $db->ConnexionBd();
       
      $sql="select * from demande ";

     
      
      $results=$db->ExecuteSelect($sql);

    //  die('in All');

      

      $db->CloseConnexion();
          
      
      return $results;
  }


    /**
     * Get the value of motif
     */ 
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set the value of motif
     *
     * @return  self
     */ 
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
};