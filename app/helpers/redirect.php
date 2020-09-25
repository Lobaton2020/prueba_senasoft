<?php

function redirect($route)
{
    $route = route($route);
    echo "<script> window.location.href= '{$route}'</script>";
    return new Redirect();
}

class Redirect
{
    public function with($key, $name)
    {
        $_SESSION["msg"][$key] = $name;
        return $this;
    }
}
