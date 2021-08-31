<?php

if (!defined('__CONFIG__')) {
    exit('you do not have a config file');
}
class DB
{
    protected static $con;
    private function __construct()
    {
        try {
            self::$con = new PDO('mysql:host=localhost;dbname=login-project-db', 'root', '');
            self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$con->setAttribute(PDO::ATTR_PERSISTENT, false);
        } catch (PDOException $e) {
            echo "Database is not connected";
            exit;
        }
    }
    public static function getConnection()
    {
        if (!self::$con) {
            new DB();
        }
        return self::$con;
    }
}
