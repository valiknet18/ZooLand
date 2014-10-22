<?php
require_once __DIR__.'/../libs/Twig.php';


class IndexController extends Twig{
    protected  $twig;

    public function __construct(URL $url){

        echo $this->render('index.html', array(
            'name' => 'Valik'
        ));
    }



} 