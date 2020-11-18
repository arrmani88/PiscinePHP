#!/usr/lib/env php
<?php
$i = 0;
$tmp = array();
if ($argc > 1){
    while (++$i < $argc){
        $tmp = array_merge($tmp, array($argv[$i]));
    }
    $tmp = implode(" ", $tmp);
    $tmp = preg_replace("/\s+/", " ", $tmp);
    $tmp = trim($tmp);
    $tmp = explode(" ", $tmp);
    sort($tmp, SORT_STRING);
    foreach($tmp as $s)
    {
        echo $s."\n";
    }
}
?>
