#!/usr/lib/env php
<?php
function char_compare($a, $b){
    $a = strtolower($a);
    $b = strtolower($b);
    $ref = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    $i = 0;
    while ($a[$i] && $b[$i] && $a[$i] == $b[$i])
        $i++;
    if ($a[$i] == NULL && $a[$i] == NULL)
        return (0);
    if ($a[$i] == NULL)
        return (-1);
    if ($b[$i] == NULL)
        return (1);
            $diff = strpos($ref, $a[$i]) - strpos($ref, $b[$i]);
    return ($diff);
}

function ft_split($array){
    $array = trim($array);
    $array = preg_split('/ +/', $array);
    return ($array);
}
$final = array();
array_shift($argv);
foreach($argv as $elem)
    $final = array_merge($final, ft_split($elem));
usort($final, "char_compare");
foreach($final as $print)
    echo $print."\n";

?>
