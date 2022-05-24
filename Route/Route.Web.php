<?php

use App\Core\Router;
use App\Controller\SecuriteController;
use App\Controller\ClasseController;
use App\Controller\PersonneController;
use App\Controller\ProfesseurController;
use App\Controller\ModuleController;
use App\Controller\DemandeController;
use App\Controller\EtudiantController;
use App\Controller\AcceuilController;
use App\Controller\MenuController;
use App\Controller\InscriptionController;








use App\exceptions\RouteNotFoundException;

$router=new Router();
/* $router->route('/',[SecuriteController::class,"authentification"]); */
$router->route('/login',[SecuriteController::class,"authentification"]);
$router->route('/logout',[SecuriteController::class,"deconnexion"]);
$router->route('/classes',[ClasseController::class,"listerClasse"]);
$router->route('/add-classe',[ClasseController::class,"creerClasse"]);
$router->route('/personne',[PersonneController::class,"lister"]);
$router->route('/lister-professeur',[ProfesseurController::class,"listerProfesseur"]);
$router->route('/modules',[ModuleController::class,"listerModule"]);
$router->route('/demande',[DemandeController::class,"listerDemande"]);
$router->route('/lister-etudiant',[EtudiantController::class,"listerEtudiant"]);
$router->route('/acceuil',[AcceuilController::class,"acceuil"]);
$router->route('/menu',[MenuController::class,"menu"]);
$router->route('/professeurs-add',[ProfesseurController::class,"ajouter"]);
$router->route('/professeurs-edit',[ProfesseurController::class,"modifier"]);
$router->route('/professeurs-delete',[ProfesseurController::class,"supprimer"]);
$router->route('/professeurs-details',[ProfesseurController::class,"details"]);
$router->route('/inscription',[InscriptionController::class,"inscription"]);













// $router->resolve();


 try{
    //essaie de resoude la route
 $router->resolve();

 }catch(RouteNotFoundException $ex){
     //Capture l'exception et affiche
     echo $ex->message;
 }