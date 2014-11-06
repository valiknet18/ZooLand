<?php
namespace Valiknet\Controller;

use Symfony\Component\HttpFoundation\Response;
use Valiknet\Libs\Twig;
use Valiknet\Libs\String;
use Valiknet\Model\AnimalsModel;

class IndexController extends Twig
{
    protected  $twig;

    public function __construct()
    {

    }

    public function getIndex()
    {
        $animals = new AnimalsModel();
        $animals = $animals->get();

        foreach($animals as &$animal){
            $str = new String($animal['text']);
            $animal['text'] = $str->cutsString(300);
        }

        return new Response($this->render('index/index.html', array(
                "animals" => $animals
            )),
            200,
            array("Content-type"=>"text/html")
        );
    }
} 