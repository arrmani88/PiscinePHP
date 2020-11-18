<?php
    if ($_GET["name"] !== NULL)
    {
        if ($_GET["action"] == "set" && $_GET["name"] != "" && $_GET["value"] != "")
            setcookie($_GET["name"], $_GET["value"], time() + 3600);
        else if ($_GET["action"] == "get")
        {
            if ($_COOKIE[$_GET["name"]] !== NULL)
                echo $_COOKIE[$_GET["name"]]."\n";
        }
        else if ($_GET["action"] == "del")
            setcookie($_GET["name"], "", -1);
    }
    
?>