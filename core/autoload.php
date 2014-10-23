<?php
require_once "../config/main.php";
require_once "../vendor/twig/twig/lib/Twig/Autoloader.php";
require_once "libs/URL.php";
require_once "route.php";


class Autoload
{
	public function __construct(){
        new Route(new URL());
	}

}