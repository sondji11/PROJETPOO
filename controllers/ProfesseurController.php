<?php
namespace App\controller;
use App\Core\Controller;
use App\Model\Professeur;




class ProfesseurController extends Controller{

    public function ajouter(){

        
            if($this->request->isGet())
            {
                $this->render('professeur/addprof.html.php');
            }
            else
            {
                extract($_POST);
                $nouveau_prof = new Professeur();
                $nouveau_prof->setNomComplet($nom_complet);
                $nouveau_prof->setGrade($grade);
                $nouveau_prof->insert();
                $this->redirecToRoute('lister-professeur');
            }

    }

    // public function affecterClasse(){



        

    // }
    // public function supprimer(){

    // }


    public function listerProfesseur(){

       
        if($this->request->isGet()){   
// 

            $this->render('professeur/listerProfesseur.html.php');
        }

    }

}