<?php

class Department
{
    private $connect;
    public function __construct()
    {
        $this->connect = Connection::get();
    }
    public function all()
    {
        try {
            return $this->connect->query("SELECT * FROM productiondeparments")->fetchAll();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    public function id($id)
    {
        try {
            return $this->connect->query("SELECT * FROM productiondeparments WHERE idproductiondeparment  = {$id}")->fetch();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
}
