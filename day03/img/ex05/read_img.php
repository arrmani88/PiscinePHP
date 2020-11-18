<?php
    $file = "../img/42.png";
    header('content-Type: image/png');
    readfile($file);
?>