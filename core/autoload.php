<?php
require "../vendor/autoload.php";
require_once "route.php";


class Autoload
{
	public function __construct(){
        echo "In Autoload";
        new Route();

        $this->requireTwig();
	}

    public function requireTwig(){

    }
}