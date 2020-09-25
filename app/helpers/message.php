<?PHP

function renderMessage($key)
{
    if (isset($_SESSION["msg"][$key])) {
        $str =  " <div class='alert alert-{$key}' role='alert'>";
        $str .= $_SESSION["msg"][$key];
        $str .= "</div>";
        unset($_SESSION["msg"][$key]);
        return $str;
    }
}

function renderAllMessages()
{
    echo renderMessage("success");
    echo renderMessage("danger");
    echo renderMessage("info");
    echo renderMessage("warning");
}
