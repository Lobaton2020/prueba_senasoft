<?php

if (!isset($_REQUEST["c"])) {
    $controller = "AuthController";
    require_once URL_APP . "controllers/{$controller}.php";
    $controller = new $controller;
    echo call_user_func([$controller, "index"]);
} else {
    $controller = ucwords(strtolower($_REQUEST["c"])) . "Controller";
    $method = isset($_REQUEST["m"]) ? $_REQUEST["m"] : "index";
    $id = isset($_GET["id"]) ? $_GET["id"] : [];
    $path = URL_APP . "controllers/{$controller}.php";
    if (file_exists($path)) {
        require_once $path;
        if (class_exists($controller)) {
            $controller = new $controller;
            if (method_exists($controller, $method)) {
                echo call_user_func_array([$controller, $method], $id);
            } else {
                exit("Controller Method not found");
            }
        } else {
            exit("Controller Class not found");
        }
    } else {
        exit("Controller File not found");
    }
}
