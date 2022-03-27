<?php

abstract class Connection {

    private $servDB = 'mysql:host=db;dbname=desafio_k';
    private $user   = 'root';
    private $pwd    = 'dEsafio@kabum';

    protected function connect() {
        try {

            $conn = new PDO($this->servDB, $this->user, $this->pwd);
            $conn->exec("set names utf8");
            return $conn;
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }
}
