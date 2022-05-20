<?php

namespace App\Model;



class Ac extends User
{
    public function inscriptions(): array
    {
        return [];
    }
    public function __construct()
    {

        parent::$role = "ROLE_AC";
    }
    public  static function findall(): array
    {
        $sql = " select id , nom_complet,role ,login, password ". self::table() ." where role like ". self::$role . "'";
        echo $sql;
        return [];
    }
}
