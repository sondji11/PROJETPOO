<?php

namespace App\Model;
use App\Core\Model;
class Classe extends Model{
  private int $id;
  private string $libeller;
  private string $niveau;
  private string $filiere;

    public function classes():array
      {
        return [];
    }

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the value of libeller
   */ 
  public function getLibeller()
  {
    return $this->libeller;
  }

  /**
   * Set the value of libeller
   *
   * @return  self
   */ 
  public function setLibeller($libeller)
  {
    $this->libeller = $libeller;

    return $this;
  }

  /**
   * Get the value of niveau
   */ 
  public function getNiveau()
  {
    return $this->niveau;
  }

  /**
   * Set the value of niveau
   *
   * @return  self
   */ 
  public function setNiveau($niveau)
  {
    $this->niveau = $niveau;

    return $this;
  }

  /**
   * Get the value of filiere
   */ 
  public function getFiliere()
  {
    return $this->filiere;
  }

  /**
   * Set the value of filiere
   *
   * @return  self
   */ 
  public function setFiliere($filiere)
  {
    $this->filiere = $filiere;

    return $this;
  }
  public static function findBy(string $sql,array $data=null,bool $single=false ):object|null|array 
  {
      
      return null;
  }

  public static function findById($id):object|null

{
    $sql="select *from'".parent::table()."'where id=$id";
    echo $sql;
    return null;
}

    public function insert():int
    {
    $db=self:: database();
    $db->connexionBD();
    $sql="INSERT INTO `classe` ( `libeller`, `niveau`, `filiere`) VALUES (?,?,?)";
    $result=$db->ExecuteUpdate($sql,[$this->libeller,$this->niveau,$this->filiere]);
    $db->CloseConnexion();
    return $result;
    
  }


    public  static function findAll():array{
        
      $db=self::database();
      
      $db->ConnexionBd();
       
      $sql="select * from classe ";

     
      
      $results=$db->ExecuteSelect($sql);

    //  die('in All');

      

      $db->CloseConnexion();
          
      
      return $results;
  }


}
