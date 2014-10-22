<?php
/**
 * Created by PhpStorm.
 * User: valik-pc
 * Date: 22.10.14
 * Time: 19:50
 */

class URL {
    public function parseGetUrl(){
        if(!isset($_GET['url'])){
            $_GET['url'] = "index";
        }

        $url = explode('/',$_GET['url']);

        return $url;
    }

    public function parsePostUrl(){
        if(!isset($_POST['url'])){
            return false;
        }

        $url = explode('/',$_POST['url']);

        return $url;
    }
} 