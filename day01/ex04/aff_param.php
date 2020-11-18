#!/usr/bin/env php
<?php
$i = 0;
while ($argc > 1 && ++$i < $argc) {
    echo $argv[$i]."\n";
}
?>
