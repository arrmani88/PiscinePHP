#!/usr/lin/env php
<?php
if ($argc == 4){
    $n1 = trim($argv[1]);
    $n2 = trim($argv[3]);
    $op = trim($argv[2]);
    if (is_numeric($n1) && is_numeric($n2)){
        if ($op == '*')
            echo (float)$n1 * (float)$n2."\n";
        if ($op == '/')
            echo (float)$n1 / (float)$n2."\n";
        if ($op == '+')
            echo (float)$n1 + (float)$n2."\n";
        if ($op == '-')
            echo (float)$n1 - (float)$n2."\n";        
        if ($op == '%')
            echo (float)$n1 % (float)$n2."\n";            
    }
}
else
    echo "Incorrect Parameters\n"
?>