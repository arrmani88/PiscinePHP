#!/usr/lib/env php
<?php
if ($argc > 1){
    $arg = trim($argv[1]);
    $arg = preg_split("/ +/", $arg);
    $i = 1;
    while ($arg[$i] != NULL)
    {
        echo $arg[$i]." ";
        $i++;
    }
    echo $arg[0]."\n";
}

?>