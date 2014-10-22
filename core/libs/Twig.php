<?php
require_once "../../vendor/autoload.php";

class Twig {
    protected $twig;

    protected  function __autoLoad(){
        $loader = new Twig_Loader_Filesystem('../web/view');
        $this->twig = new Twig_Environment($loader);
    }
} 