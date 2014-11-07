<?php
require __DIR__."/../vendor/autoload.php";

use Symfony\Component\HttpFoundation\Request;
use Phroute\RouteCollector;
use Phroute\Dispatcher;
use Valiknet\Controller\IndexController;
use Valiknet\Controller\AnimalController;
use Valiknet\Controller\CategoryController;

$request = Request::createFromGlobals();

$route = new RouteCollector();

$indexController = new IndexController();
$animalController = new AnimalController();
$categoryController = new CategoryController();

$route->get('/', array($indexController, 'getIndex'));

$route->get('/animal/view/{id}', array($animalController, 'getFullAnimal'));
$route->get('/animal/add', array($animalController, 'getAddAnimal'));
$route->get('/animal/edit/{id}', array($categoryController, ''));
$route->post('/animal/create', array($animalController, 'postCreateAnimal'));
$route->delete('/animal/delete/', array());


$route->get('/category/view/{id}', array($categoryController, 'getCategoryById'));
$route->get('/category/list', array($categoryController, 'getListCategory'));
$route->get('/category/create', array($categoryController, 'getCreateCategory'));
$route->post('/category/create', array($categoryController, 'postCreateCategory'));

$dispatcher = new Dispatcher($route);
$response = $dispatcher->dispatch($request->getMethod(), parse_url($request->getPathInfo(), PHP_URL_PATH));

$response->send();
