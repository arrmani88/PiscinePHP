#!/usr/lib/env php
<?php
if ($argc == 2){
    if (preg_match_all('/^ *\(*([+-]?\(*[0-9]+\.?[0-9]*)\)* *([\*\/\-\+\%]){1} *\(*([+-]?\(*[0-9]+\.?[0-9]*)\)* *$/', $argv[1], $line))
    {
        $n1 = $line[1][0];
        $op = $line[2][0];
        $n2 = $line[3][0];
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
    else
        echo "Syntax Error\n";
}
else
    echo "Incorrect Parameters\n";
?>