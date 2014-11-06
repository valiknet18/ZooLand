<?php
namespace Valiknet\Controller;

use Valiknet\Libs\String;
use Symfony\Component\HttpFoundation\Response;
use Valiknet\Libs\Twig;
use Valiknet\Model\AnimalsModel;
use Valiknet\Model\CategoryModel;

class CategoryController extends Twig{
    public function getListCategory(){
        $categories = new CategoryModel();

        $listCategories = $categories->get();

        return new Response(
            $this->render(
                "/categories/listCategory.html",
                array(
                    "categories" => $listCategories
                )
            ),
            200,
            array("Content-type"=>"text/html")
        );
    }

    public function getCategoryById($id)
    {
        $animals = new AnimalsModel();

        $animalsList = $animals->get(array('category_id' => $id));

        if(!$animalsList){
            return new Response(
                $this->render(
                    "/categories/listAnimalsByCategory.html"
                ),
                404,
                array("Content-type"=>"text/html")
            );
        }



        foreach($animalsList as &$animal){
            $str = new String($animal['text']);
            $animal['text'] = $str->cutsString(300);
        }

        $category = $animalsList[0]['cname'];

        return new Response(
            $this->render(
                "/categories/listAnimalsByCategory.html",
                array(
                    "animals" => $animalsList,
                    "category"=> $category
                )
            ),
            200,
            array("Content-type"=>"text/html")
        );
    }
} 