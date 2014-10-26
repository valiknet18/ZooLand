<?php
/**
 * Created by PhpStorm.
 * User: valik-pc
 * Date: 22.10.14
 * Time: 19:50
 */

class URL
{
    public function parseGetUrl()
    {
        if(!isset($_GET['url'])){
            $_GET['url'] = "index";
        }

        $url = explode('/',$_GET['url']);

        $url['method'] = "Get";
        return $url;
    }

    public function parsePostUrl()
    {
        if(!isset($_POST['url'])){
            return false;
        }

        $url = explode('/',$_POST['url']);

        $url['method'] = "Post";
        return $url;
    }

    public function getUrl()
    {
        $request = $_SERVER['REQUEST_METHOD'];

        switch(strtoupper($request)){
            case 'GET':{
                return $this->parseGetUrl();
            }
                break;

            case 'POST':{
                return $this->parsePostUrl();
            }
                break;

            default:{
                return false;
            }
        }

    }
} 