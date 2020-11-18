#!/usr/bin/env php
<?php
if ($argc == 2)
{
    $str = preg_replace("/ +/", " ", $argv[1]);
    echo trim($str)."\n";
}
?>