<?php
require_once "../../../vendor/autoload.php";

use Valiknet\Model\AnimalsModel;

class TestAnimalsModel extends PHPUnit_Framework_TestCase {
    public function testGetModel()
    {
        $animalsModel = new AnimalsModel();

        return $animalsModel;
    }

    /**
     * @param AnimalsModel $animalsModel
     * @depends TesGetModel
     */
    public function testGetAnimals(AnimalsModel $animalsModel)
    {
        $this->assertFalse($animalsModel->get(""));

        $this->assertFalse($animalsModel->get(array('id' => "")));

        $this->assertTrue($animalsModel->get(array('id' => 3)));
    }


    /**
     * @param AnimalsModel $animalsModel
     * @depends TestGetModel
     */
    public function testAddAnimals(AnimalsModel $animalsModel)
    {
        $this->assertFalse($animalsModel->add(1));

        $this->assertFalse($animalsModel->add(array()));

        $this->assertTrue($animalsModel->add("str=1&str=2"));
    }

    
}
 