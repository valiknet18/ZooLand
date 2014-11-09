<?php
require_once "../../../vendor/autoload.php";

use Valiknet\Controller\CategoryController;

class TestCategoryController extends PHPUnit_Framework_TestCase {
    public function testGetCategory()
    {
        $categoryController = new CategoryController();

        $this->assertEquals(404, $categoryController->getCategoryById("reasd")->getStatusCode());
        $this->assertEquals(200, $categoryController->getCategoryById(7)->getStatusCode());
    }
}
 