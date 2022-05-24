<?php
namespace App\controller;
use App\Core\Controller;
class MenuController extends Controller{

   
    public function Menu(){

       
        if($this->request->isGet()){   
    
// 

            $this->render('menu/menu.html.php');
        }

    }

}