<?php

abstract class Connection {

    private static $instance;

    private static function getInstance() {

        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=db; dbname=desafio_k', 'root', 'dEsafio@kabum');
                self::$instance->exec("set names utf8");
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        return self::$instance;
    }

    protected function prepare($sql) {
        return self::getInstance()->prepare($sql);
    }
}
