<?php
namespace App\Model;


class Professeur extends Personne
{
    private string $grade;
    
    
    public function __construct()
    {
        
        parent::$role="ROLE_PROFESSEUR";
    }

public function classes():array{
    return [];
}

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**  
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    } 
    public  static function findAll():array{
        
        $db=self::database();
        
        $db->ConnexionBd();
         
        $sql="select * from personne where role like 'ROLE_PROFESSEUR'";

       
        
        $results=$db->ExecuteSelect($sql);

        //dd($results);

        

        $db->CloseConnexion();
            
        
        return $results;
    }
    public static function findbyid($id):object|null

{
    $sql="select *from'".self::table()."'where id=$id";
    echo $sql; 
    return null;
}
public function insert():int{
    $db=parent::database();
    $db->ConnexionBd();
    $sql="INSERT INTO `personne` ( `nom_complet`, `role`, `grade`) VALUES (?,?,?)";
    $result=$db->ExecuteUpdate($sql,[$this->NomComplet,parent::$role,$this->grade]);
    $db->CloseConnexion();
    return $result;
}
}