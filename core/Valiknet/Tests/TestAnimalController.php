<?php
require_once "../../../vendor/autoload.php";

use Symfony\Component\HttpFoundation\Request;
use Valiknet\Controller\AnimalController;

class TestAnimalController extends PHPUnit_Framework_TestCase {
    public function testFullAnimal()
    {
        $animalController = new AnimalController();

        $this->assertEquals(404, $animalController->getFullAnimal("test")->getStatusCode());
        $this->assertEquals(404, $animalController->getFullAnimal("5")->getStatusCode());
        $this->assertEquals(200, $animalController->getFullAnimal(5)->getStatusCode());
    }
}