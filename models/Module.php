<?php
namespace App\Model;

class Module  extends Professeur
{
    private int $id_module;
    private string $NomModule;
    private string $LibellerModule;

    /**
     * Get the value of id
     */ 
    // public function getId()
    // {
    //     return $this->id;
    // }

    // /**
    //  * Set the value of id
    //  *
    //  * @return  self
    //  */ 
    // public function setId($id)
    // {
    //     $this->id = $id;

    //     return $this;
    // }

    /**
     * Get the value of NomModule
     */ 
    public function getNomModule()
    {
        return $this->NomModule;
    }

    /**
     * Set the value of NomModule
     *
     * @return  self
     */ 
    public function setNomModule($NomModule)
    {
        $this->NomModule = $NomModule;

        return $this;
    }

    /**
     * Get the value of LibellerModule
     */ 
    public function getLibellerModule()
    {
        return $this->LibellerModule;
    }

    /**
     * Set the value of LibellerModule
     *
     * @return  self
     */ 
    public function setLibellerModule($LibellerModule)
    {
        $this->LibellerModule = $LibellerModule;

        return $this;
    }

    /**
     * Get the value of id_module
     */ 
    public function getId_module()
    {
        return $this->id_module;
    }

    /**
     * Set the value of id_module
     *
     * @return  self
     */ 
    public function setId_module($id_module)
    {
        $this->id_module = $id_module;

        return $this;
    }
    public function insert():int
    {
    $db=self:: database();
    $db->connexionBD();
    $sql="INSERT INTO `module` (  `nom_module`, `libeller_module`) VALUES (?,?)";
    $result=$db->ExecuteUpdate($sql,[$this->nom_module,$this->libeller_module]);
    $db->CloseConnexion();
    return $result;
    
  }


  public  static function findAll():array{
   
        // die('ok');
    $db=self::database();
    
    $db->ConnexionBd();


     
    $sql="select * from module ";

   
    
    $results=$db->ExecuteSelect($sql);


    

    $db->CloseConnexion();
        
    
    return $results;
}

}