<?php

namespace App\Model;

abstract class User extends Personne
{
    protected string $login;
    protected string $password;


    public function __construct()
    {
      $this->table();
    }
   



    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    // public function getRole()
    // {
    //     return $this->role;
    // }

    // /**
    //  * Set the value of role
    //  *
    //  * @return  self
    //  */ 
    // public function setRole($role)
    // {
    //     $this->role = $role;

    //     return $this;
    // }

   
    public static function findUserByLoginAndPassword(string $login,string $password):object|null|array{
        //dd("in login and pass");
        return parent::findBy("select * from personne where login=? and password=?",[$login,$password]);
    }


    public  static function findAll():array{
        
        $db=self::database();
        
        $db->ConnexionBd();
         
        $sql="select * from ".parent::table()."where role not like 'ROLE_PROFESSEUR'";
  
       
        
        $results=$db->ExecuteSelect($sql);
  
      //  die('in All');
  
        
  
        $db->CloseConnexion();
            
        
        return $results;
    }
  

}