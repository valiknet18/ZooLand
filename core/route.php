<?php


class Route
{
//    Контруктов, тут відбувається вся основна робота
    public function __construct(array $url)
    {

        switch($url[0]){
            case 'index':{
               new IndexController($url);
            }
                break;

            case 'animal':{
                new AnimalController($url);
            }
                break;

            default: {

            }
        }

    }
}