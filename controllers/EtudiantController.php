<?php
namespace App\Controller;
use App\Core\Controller;


class EtudiantController extends Controller{



    public function fairedemande(){

    }
    public function listerEtudiant(){


       
        if($this->request->isGet()){   



            $this->render('etudiant/listeretudiant.html.php');
        // die('ok');


        }

    }

}