<?php

class Connection
{
    private static $connect;

    private function __construct()
    {
        try {
            $dsn = DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";char=" . DB_CHARSET;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ];
            self::$connect = new PDO($dsn, DB_USER, DB_PASSWORD, $options);
        } catch (Exception $e) {
            exit($e->getMessage());
        }
    }

    public static function get()
    {
        new self();
        return self::$connect;
    }
}
