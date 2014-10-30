<?php
namespace Valiknet\Controller;

use Valiknet\Libs\Twig;
use Valiknet\Model\AnimalsModel;
use Valiknet\Libs\Error404Exception;
use Symfony\Component\HttpFoundation\Response;

class AnimalController extends Twig
{
    public function __construct()
    {


    }

    public function routing(array $url)
    {
        switch($url[1]){
            //Post
            case 'searchPost':{

            }
                break;

            case 'addPost':{

            }
                break;

            case 'deletePost':{

            }
                break;

            case 'editPost':{

            }
                break;

            //Get
            case 'searchGet':{

            }
                break;

            case 'addGet':{
                $this->addAnimalGet();
            }
                break;

            case 'deleteGet':{

            }
                break;

            case 'editGet':{

            }
                break;

            default:{
            if(intval($url[1]))
                return $this->fullAnimalGet($url);
            }
        }
    }

    private function fullAnimalGet(array $array)
    {
        $animals = new AnimalsModel();

        if(!$animals->get($array)){
            throw new Error404Exception();
        }

        $animal = $animals->get();



        return new Response($this->render('animal/fullAnimal.html', array(
            "animal" => $animal[0]
        )),
        200,
        array("Content-type" => "text/html"));
    }


    private function addAnimalGet()
    {
        echo $this->render('animal/addAnimal.html');
    }
}