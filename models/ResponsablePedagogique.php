<?php
namespace App\Model;

class ResponsablePedagogique extends User
{
    public function __construct()
    {
        self::$role="ROLE_RP"; 
    }
    
    public  static function findall():array{
        $sql="select *from ".parent::table()." where role like ? ";
        
        return  parent ::findBy($sql,[self::$role],true);
    }
} 