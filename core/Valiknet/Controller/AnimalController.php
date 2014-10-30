<?php
namespace Valiknet\Controller;

use Valiknet\Libs\Twig;

class AnimalController extends Twig
{
    public function __construct(array $url)
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
                    $this->fullAnimalGet($url);

            }
        }

    }


    private function fullAnimalGet(array $array)
    {
        $animals = new AnimalsModel();

        if(!$animals->get($array)){
            throw new  Error404Exception();
        }

        $animal = $animals->get();



        echo $this->render('animal/fullAnimal.html', array(
            "animal" => $animal[0]
        ));
    }


    private function addAnimalGet()
    {
        echo $this->render('animal/addAnimal.html');
    }
}