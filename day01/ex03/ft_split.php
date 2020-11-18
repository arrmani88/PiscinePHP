<?php
    function ft_split($array){
        $array = trim($array);
        $array = preg_replace("/ +/", " ", $array);
        $array = explode(" ", $array);
        $array = array_filter($array, 'strlen');
        sort($array, SORT_STRING);
        return ($array);
    }
?>
