<?php
namespace App\Controller;
use App\Core\Controller;


class InscriptionController extends Controller{



    public function inscription(){
        if($this->request->isget()){   



            $this->render('inscription/inscription.html.php');

    }
   

    }

}