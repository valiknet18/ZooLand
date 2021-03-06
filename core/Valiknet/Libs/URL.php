<?php
namespace Valiknet\Libs;

class URL
{
    public function parseGetUrl()
    {
        if(!isset($_GET['url'])){
            $_GET['url'] = "index";
        }

        $url = explode('/',$_GET['url']);
        if(isset($url[1]) && !intval($url[1])){
            $url[1] .= "Get";
        }

        return $url;
    }

    public function parsePostUrl()
    {
        if(!isset($_POST['url'])){
            return false;
        }

        $url = explode('/',$_POST['url']);

        if(isset($url[1]) && !intval($url[1])){
            $url[1] .= "Post";
        }

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