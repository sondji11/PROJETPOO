<?php
namespace App\Controller;
use App\Core\Controller;


class ModuleController extends Controller{



    public function affectermodule(){

    }
    public function listerModule(){

        // die('ok');

       
        if($this->request->isGet()){   


            $this->render('module/listermodule.html.php');
        }

    }

}