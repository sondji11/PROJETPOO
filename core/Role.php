<?php

namespace App\Core;

class Role{

    private Session $session;
    public function __construct(Session $session){
        $this->session=$session;
    }
    public  static function isconnect(){

    }
    public  static function isRP():bool{
        return self::isconnect() && $_SESSION['user_connect']['role']=='ROLE_RP';
    }
    public  static function isAC():bool{
        return self::isconnect() && $_SESSION['user_connect']['role']=='ROLE_AC';

    }
    public  static function isEtudinat():bool{
        return self::isconnect() && $_SESSION['user_connect']['role']=='ROLE_ETUDIANT';


    }
}