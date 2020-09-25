<?php

function execute_post($callback)
{
    if ($_SERVER["REQUEST_METHOD"]) {
        $callback((object)$_POST);
    } else {
        exit("Error, Method of request id incorrect");
    }
}
