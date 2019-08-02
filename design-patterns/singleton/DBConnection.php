<?php


// vérouillage max
final class DBConnection
{
    /**
     * @var DBConnection
     */
    // va contenir new self
    static $instance = null;
    // public $name = '';

    private function __construct()
    {
        $this->pdo = new PDO(
            // dsn = driver source name
            'mysql:host=localhost; dbname=astonproduit; charset=utf8',
            'Aurelie',
            //''
        );
    }

    private function __clone()
    {
        throw new Exception('Clone is not allowed');
    }

    /*
    // permet de ne pas avoir une insertion $db = new DBConnection();
    private function __construct()
    {
        echo 'Toto';
    }
    */

    static public function  getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getPDO(): PDO
    {
        return $this->pdo;
    }
}