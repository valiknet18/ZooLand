<?php
//include libs
require_once "libs/URL.php";
require_once 'libs/Twig.php';
require_once "libs/Error404Exception.php";

//include another files
require_once "../config/main.php";
require_once "../vendor/twig/twig/lib/Twig/Autoloader.php";

//include model
require_once 'model/AnimalsModel.php';

//include controller
require_once "controller/IndexController.php";
require_once "controller/AnimalController.php";

//include route
require_once "route.php";



class Autoload
{
	public function __construct(){
        new Route(new URL());
	}

}