<?php
namespace App\Controller;
use App\Core\Controller;


class DemandeController extends Controller{



    public function fairedemande(){

    }
    public function listerdemande(){

        // die('ok');

       
        if($this->request->isGet()){   


            $this->render('module/listerdemande.html.php');
        }

    }

}