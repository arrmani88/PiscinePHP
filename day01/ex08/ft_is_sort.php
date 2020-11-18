<?php
    function ft_is_sort($array){
        $str = array();
        $rstr = array();
        sort($str, SORT_STRING);
        rsort($rstr, SORT_STRING);
        if ($str == $array || $rstr == $array)
            return (TRUE);
        return (FALSE);
    }
?>