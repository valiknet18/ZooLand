<?php
require_once "../../../vendor/autoload.php";

use Valiknet\Controller\AnimalController;

class TestAnimalController extends PHPUnit_Framework_TestCase {
    public function testFullAnimal()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/animal/view/test');

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }
}
 