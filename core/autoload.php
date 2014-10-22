<?php
require_once "../vendor/autoload.php";
require_once "libs/URL.php";
require_once "route.php";


class Autoload
{
	public function __construct(){
        new Route(new URL());
	}

}