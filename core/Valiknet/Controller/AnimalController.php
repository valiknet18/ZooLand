<?php
namespace Valiknet\Controller;

use Valiknet\Libs\Twig;
use Valiknet\Model\AnimalsModel;
use Symfony\Component\HttpFoundation\Response;
use Valiknet\Model\CategoryModel;
use Symfony\Component\HttpFoundation\Request;

class AnimalController extends Twig
{
    public function __construct()
    {

    }

    public function getFullAnimal($id)
    {
        $animals = new AnimalsModel();

        $animal = $animals->get(array('id' => $id));

        return new Response($this->render('animal/fullAnimal.html', array(
                "animal" => $animal[0]
            )),
            200,
            array("Content-type" => "text/html")
        );
    }


    public function getAddAnimal()
    {
        $categories = (new CategoryModel())->get();
        return new Response(
            $this->render('animal/addAnimal.html', array(
                'categories' => $categories
            )),
            200,
            array("Content-type" => "text/html")
        );
    }

    public function postCreateAnimal()
    {
        $request = new Request();
        $animalsModel = new AnimalsModel();

        $form = $request->getContent();

        if($animalsModel->add($form)){
            $response = array(
                "code" => "200"
            );
        }
        else{
            $response = array(
                "code" => "404"
            );
        }


        return new Response(
            json_encode($response),
            200,
            array(
                "Content-type" => "application/json"
            )
        );
    }
}