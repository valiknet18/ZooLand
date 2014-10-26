<?php
/**
 * Created by PhpStorm.
 * User: valik-pc
 * Date: 24.10.14
 * Time: 19:58
 */

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


    public function fullAnimalGet(array $array)
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
}