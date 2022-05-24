<?php
namespace App\controller;
use App\Core\Controller;

use App\Model\User;




class SecuriteController extends Controller{
   
    public function authentification(){
        //1-Affichage du formulaire de connexion=>GET

        
        if($this->request->isGet()){

            $this->render('securite/login.html.php');
            
        }else{
            

               

            
            extract($_POST);
            
            $connected=User::findUserByLoginAndPassword($login,$password);

            if($connected==null){
                //dd('in null');
                $this->redirecToRoute('login');
            }else{
                $_SESSION['user_connect']=$connected;
                $_SESSION['user_connect']=$user;

                $this->redirecToRoute('menu');

            }
        }

        //2-traitement apres soumission => POST
    }

    public function inscription(){
        if($this->Request->isGet()){
            $this->render('inscription/inscription.html.php');
        }
    }
    public function deconnexion(){
        unset($_SESSION['uder_connect']);
        session_destroy();

        $this->redirecToRoute("login");
        
    }

}