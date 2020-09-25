<?php

function view($path, $data = [], $all = true)
{
    extract($data);
    $path = str_replace(".", SEPARATOR, $path);
    if ($all) {
        require_once URL_APP . "views" . SEPARATOR . "layouts" . SEPARATOR . "header.php";
        require_once URL_APP . "views" . SEPARATOR . "layouts" . SEPARATOR . "navbar.php";
        require_once URL_APP . "views" . SEPARATOR . "{$path}.php";
        require_once URL_APP . "views" . SEPARATOR . "layouts" . SEPARATOR . "footer.php";
    } else {
        require_once URL_APP . "views" . SEPARATOR . "layouts" . SEPARATOR . "header.php";
        require_once URL_APP . "views" . SEPARATOR . "{$path}.php";
        require_once URL_APP . "views" . SEPARATOR . "layouts" . SEPARATOR . "footer.php";
    }
}
