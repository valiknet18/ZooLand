<?php
require_once __DIR__.'/../libs/Twig.php';
require_once __DIR__.'/../model/AnimalsModel.php';


class IndexController extends Twig{
    protected  $twig;

    public function __construct(URL $url){
        $animals = new AnimalsModel();
        $animals = $animals->get();

        echo $this->render('index/index.html', array(
            "animals" => $animals
        ));
    }



} 