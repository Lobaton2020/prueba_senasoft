<?php

class Controller
{

    public function authentication()
    {
        if (!isset($_SESSION["credentials"])) {
            redirect("auth");
            exit;
        }
    }

    public function model($model)
    {
        $model = ucwords($model);
        $path = URL_APP . "models/{$model}.php";
        if (file_exists($path)) {
            require_once $path;
            if (class_exists($model)) {
                return new $model;
            } else {
                exit("Model Class not found");
            }
        } else {
            exit("Model File not found");
        }
    }
}
