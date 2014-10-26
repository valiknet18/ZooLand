<?php


class IndexController extends Twig
{
    protected  $twig;

    public function __construct(array $url)
    {
        $animals = new AnimalsModel();
        $animals = $animals->get();

        foreach($animals as &$animal){
            $str = new String($animal['text']);
            $animal['text'] = $str->cutsString(300);
        }

        echo $this->render('index/index.html', array(
            "animals" => $animals
        ));
    }



} 