<?php
namespace App\Core;

use App\exceptions\RouteNotFoundException;
use App\Controller\SecuriteController;
use App\Controller\Controllers;

class Router{
    private Request $request;

    public function __construct(){
       $this->request=new Request; 
    }
    private array $routes=[];
    public function route(string $uri,array $action){
        $this->routes[$uri]=$action;
    }

    public function resolve(){

        

// var_dump($this->request->getUri()[0]);die;
        $uri="/".$this->request->getUri()[0];//[0]
    
        if(isset($this->routes[$uri])){
                $route=$this->routes[$uri];
                [$ctrClass,$action]=$route;

                // dd($ctrClass);
                // die($ctrClass);

                // [$ctrClass]=$route[0]; 
                // [$action]=$route[1];
                // dd("App\\Controller\\".$ctrClass);
                // die($ctrClass);

            

                if(class_exists($ctrClass) && method_exists($ctrClass,$action)){
                    
                    // dd($ctrClass);
                    // die("okk");
                    $ctrl=new $ctrClass($this->request);//$ctrl=new SecurityController()
                    // $ctrl->{$action()};//$ctrl->authentificatio()
                    call_user_func(array($ctrl,$action));
                }else{
                    // die("iix");
                    throw new RouteNotFoundException();
                }
            }else{
                $obj = new SecuriteController($this->request);
                call_user_func(array($obj,"authentification"));
                // throw new RouteNotFoundException();
            }
    }
}


// if(isset($this->routes[$uri])){
//     dd("route exite");
// }else{
//     throw new RouteNotFoundException();
// }