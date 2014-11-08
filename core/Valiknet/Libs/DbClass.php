<?php
namespace Valiknet\Libs;

use Valiknet\Config\Main as Config;

abstract class DbClass
{
    protected $pdo;

    protected function init()
    {
        $dsn = "mysql:host=".Config::$host.";dbname=".Config::$name_db.";charset=utf8";

        try {
            $this->pdo = new \PDO($dsn,Config::$name_user,Config::$password);
        }
        catch(\PDOException $e){
            die('Ошибка підключення: '.$e->getMessage());
        }
    }

    protected function querySelect($query, array $params = array())
    {
        if(!$this->pdo){
            $this->init();
        }

        $q = $this->pdo->prepare($query);

        if($params && (substr_count($query,'?') > 0)){
            $q->execute($params);
        }
        elseif((substr_count($query,'?') > 0 && empty($params)) || (substr_count($query,'?') <= 0 && !empty($params))){
            return false;
        }
        else{
            $q->execute();
        }


        return $q->fetchAll();
    }


    protected function queryAdd($query, array $params = array())
    {
        if(!$this->pdo){
            $this->init();
        }

        $q = $this->pdo->prepare($query);

        if($params && (substr_count($query,'?') > 0)){
            $q->execute($params);
        }
        elseif((substr_count($query,'?') > 0 && !$params) || (substr_count($query,'?') <= 0 && $params)){
            return false;
        }

        return $q;
    }

    protected function queryUpdate($query, array $params = array())
    {
        if(!$this->pdo){
            $this->init();
        }

        $q = $this->pdo->prepare($query);

        if($params && (substr_count($query,'?') > 0)){
            $q->execute($params);
        }
        elseif((substr_count($query,'?') > 0 && !$params) || (substr_count($query,'?') <= 0 && $params)){
            return false;
        }

        return $q;
    }

    protected function queryDelete($query, array $params = array())
    {
        if(!$this->pdo){
            $this->init();
        }

        $q = $this->pdo->prepare($query);

        if($params && (substr_count($query,'?') > 0)){
            $q->execute($params);
        }
        elseif((substr_count($query,'?') > 0 && !$params) || (substr_count($query,'?') <= 0 && $params)){
            return false;
        }

        return $q;
    }

    protected function saveFile()
    {
        $file = $_FILES['image_animal'];
        if(!$file['error']){
            $basename = "img/public/" . basename($file['name']);
            if(move_uploaded_file($file['tmp_name'],$basename)){
                return true;
            }
            else{
                return false;
            }
        }
    }
} 