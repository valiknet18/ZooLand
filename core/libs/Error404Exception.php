<?php
/**
 * Created by PhpStorm.
 * User: valik-pc
 * Date: 22.10.14
 * Time: 19:39
 */

class Error404Exception extends Exception{
    public function __construct(){
        return "404 File not found";
    }
} 