#!/usr/lib/env php
<?php
if ($argc > 2){
    $i = 2;
    while ($argv[$i] != NULL)
    {
        $key_val = preg_split("/:+/", $argv[$i]);
        if ($key_val[0] == $argv[1] && $key_val[1] != NULL)
        {
            echo $key_val[1] . "\n";
            return ;
        }
        $i++;
    }
}
?>