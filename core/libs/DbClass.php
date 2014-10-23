<?php

abstract class DbClass{
    protected $pdo;

    public function init(){
        $dsn = "mysql:host=".config::$host.";dbname=".confg::$name_db;

        try {
            $this->pdo = new PDO($dsn,config::$name_user,config::$password);
        }
        catch(PDOException $e){
            die('Ошибка підключення: '.$e->getMessage());
        }
    }

    public function query($query, array $params = array()){
        if(!$this->pdo){
            $this->init();
        }

        $q = $this->pdo->prepare($query);

        if($params){
            $q->execute($params);
        }

        return $q->fetchColumn();
    }
} 