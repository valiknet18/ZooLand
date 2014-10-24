<?php


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