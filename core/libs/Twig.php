<?php

abstract class Twig
{
    private $twig;

    private  function init()
    {
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem('../web/view');
        $this->twig = new Twig_Environment($loader);
    }

    protected function render($path, array $data = array())
    {
        $this->init();
        return $this->twig->render($path,$data);
    }
} 