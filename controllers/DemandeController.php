<?php
namespace App\Controller;
use App\Core\Controller;


class DemandeController extends Controller{



    public function fairedemande(){

    }
    public function listerdemande(){


       
        if($this->request->isGet()){   


            $this->render('demande/listerdemande.html.php');
        // die('ok');

        }

    }

}