<?php
include "auth.php";

    session_start();
    $log = $_GET["login"];
    $pass = $_GET["passwd"];
    if ($log != "" && $pass != "" && auth($log, $pass)){
        $_SESSION["loggued_on_user"] = $log;
        echo "OK\n";
    }
    else{
        $_SESSION["loggued_on_user"] = "";
        echo "ERROR\n";
    }
?>