<?php
namespace App\Core;

abstract class Model implements IModel
{
    // protected static DataBase|null $dataBase=null;

         //dependance

    protected  static function database():DataBase
    {
        return new DataBase( );
    }

    public static function table()
    {
        $table=get_called_class();
        $table=($table=="User"or $table=="Ac"or $table=="ResponsablePedagogique" or $table=="professeur")?"personne":strtolower(str_replace("App\Model\\","",$table));
        return $table;  
        
    }
     
    public function insert():int
    {
        return 0;
    }
public function update():int
{
    return 0;
}
public  static function findAll():array{
    $sql="select *from ".self::table();
    echo $sql;
    return [];
}

public static function delete(int $id):int
{
    $db=
    $sql="`Delete from".self::table()."where id=?";
    echo $sql;
    return 0;

}

public static function findById($id):object|null

{   
    $sql="select *from'".self::table()."'where id=$id";
    echo $sql;
    return null;
}

public static function findBy(string $sql,array $data=null,bool $single=false):object|null|array
{   
    $db=self::database();
    $db->ConnexionBd();
    $result=$db->ExecuteSelect($sql,$data,$single);
    $db->CloseConnexion();
    return $result;
}


    /**
     * Get the value of table
    //  */ 
    // public function getTable()
    // {
    //     return $this->table;
    // }

    // /**
    //  * Set the value of table
    //  *
    //  * @return  self
    //  */ 
    // public function setTable($table)
    // {
    //     $this->table = $table;

    //     return $this;
    // }
}