<?php
require_once "../../../vendor/autoload.php";

use Symfony\Component\HttpFoundation\Request;
use Valiknet\Controller\AnimalController;

class TestAnimalController extends PHPUnit_Framework_TestCase {


    public function testFullAnimal()
    {
        $client = new Request();

        $crawler = $client->get('/animal/view/test');

//        $this->assertEquals(404, "");
    }
}
 