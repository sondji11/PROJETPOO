<?php 
namespace App\Model;
use App\Core\Model;


abstract class Personne extends Model
{
    protected int $id;
    protected string $NomComplet;
    protected static string $role;

    public function __construct()
    {
     parent::table();
    }
    // public static function getNomComplet():int
    // {
    //     return self::$NomComplet;
    // }

    // public static function setNomComplet(string $NomComplet):string
    // {
    //     return self::$NomComplet;
    // }

    // public  function table():int
    // {
    //     return 
    // }

    // public static function setid(int $id):int
    // {
    //     return self::$id;
    // }

   


    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of NomComplet
     */ 
    public function getNomComplet()
    {
        return $this->NomComplet;
    }

    /**
     * Set the value of NomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($NomComplet)
    {
        $this->NomComplet = $NomComplet;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
   
}