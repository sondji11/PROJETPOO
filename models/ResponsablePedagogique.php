<?php
namespace App\Model;

class ResponsablePedagogique extends User
{
    public function __construct()
    {
        $this->role="ROLE_RP"; 
    }
    public function demande():array
    {
        return [];
    }
    public  static function findall():array{
        $sql="select *from ".parent::table()." where role like ROLE_RP ";
        echo $sql;
        return [];
    }
}