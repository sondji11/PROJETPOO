<?php
namespace App\exceptions;

class RouteNotFoundException extends \exception{
    public $message="Page not found , erreur 404";
}