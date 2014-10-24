<?php
require_once "libs/Error404Exception.php";
require_once "controller/IndexController.php";

class Route
{
//    Контруктов, тут відбувається вся основна робота
    public function __construct(URL $url){
        switch($url->parseGetUrl()[0]){
            case 'index':{
               new IndexController($url);
            }
                break;

            case 'animals':{

            }
                break;

            default: {

            }
        }

    }





}