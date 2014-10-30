<?php
namespace Valiknet;

use Valiknet\Controller\IndexController;
use Valiknet\Controller\AnimalController;
use Symfony\Component\HttpFoundation\Request;

class Route
{
//    Контруктов, тут відбувається вся основна робота

    private $request;
    private $response;

    public function __construct(array $url)
    {
        $this->request = Request::createFromGlobals();
        $this->routing($url);
    }

    private function routing(array $url)
    {
        switch($url[0]){
            case 'index':{
                $this->response = (new IndexController())->getIndex($url);
            }
                break;

            case 'animal':{
                $this->response = (new AnimalController())->routing($url);
            }
                break;

            default: {
            }
        }

        $this->response->send();
    }
}