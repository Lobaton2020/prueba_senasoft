<?php

function route($route)
{
    $route = explode("/", $route);
    $str = "?c={$route[0]}";
    $str .= isset($route[1]) ?  "&m={$route[1]}" : "";
    $str .= isset($route[2]) ?  "&id={$route[2]}" : "";
    return URL_PROJECT . $str;
}
