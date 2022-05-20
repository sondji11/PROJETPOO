<?php

use App\Core\Router;
use App\Controller\SecuriteController;
use App\Controller\ClasseController;
use App\Controller\PersonneController;
use App\Controller\ProfesseurController;
use App\Controller\ModuleController;
use App\Controller\DemandeController;



use App\exceptions\RouteNotFoundException;

$router=new Router();
$router->route('/login',[SecuriteController::class,"authentification"]);
$router->route('/logout',[SecuriteController::class,"deconnexion"]);
$router->route('/classes',[ClasseController::class,"listerClasse"]);
$router->route('/add-classe',[ClasseController::class,"creerClasse"]);
$router->route('/personne',[PersonneController::class,"lister"]);
$router->route('/lister-professeur',[ProfesseurController::class,"listerProfesseur"]);
$router->route('/modules',[ModuleController::class,"listerModule"]);
$router->route('/demande',[DemandeController::class,"listerDemande"]);







// $router->resolve();


 try{
    //essaie de resoude la route
 $router->resolve();

 }catch(RouteNotFoundException $ex){
     //Capture l'exception et affiche
     echo $ex->message;
 }