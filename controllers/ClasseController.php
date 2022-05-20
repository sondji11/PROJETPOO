<?php
namespace App\controller;
use App\Core\Controller;
class ClasseController extends Controller{

    public function affecterClasse(){

    }
    public function listerclasse(){

       
        if($this->request->isGet()){   
    
// 

            $this->render('classes/listerclasse.html.php');
        }

    }

}