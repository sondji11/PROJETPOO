<?php
namespace App\Core;

 class DataBase
    {
        private \PDO|null $pdo=null;
        
       public function ConnexionBd():void

      //  
       {
           
           try{
                $ds="mysql:dbname=projet poo_inscription;host=127.0.0.1;port:8002";
                $this->pdo= new \PDO($ds,"root",""); 
                // die('In connexion');
                //echo"OK";

           }catch(\PDOException $Exception)
           {
            //    die($Exception->getMessage());

               exit("erreur de connexion");

           }
       }

       public function CloseConnexion():void
       {
        $this->pdo=null;
       }

       public function ExecuteSelect(string $sql,array $data=[], bool $single=false):object|array|null
       {  
           
            $query=$this->pdo->prepare($sql); 

            //dd($query);
            
            $query->execute($data);  
            
            //die('in select'); 

            if($single)
            {
                $result=$query->fetch(\PDO::FETCH_OBJ);
       
            }
            else{
                 $result=$query->fetchAll(\PDO::FETCH_OBJ); 

                }
            
                return $result ;


            
       }

       public function ExecuteUpdate(string $sql,array $data=[]):int
       {
           $query=$this->pdo->prepare($sql);

           
           $query->execute($data);

            return $query->rowCount($data);
       }
    }