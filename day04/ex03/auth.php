<?php
    function auth($login, $passwd){
        if(file_exists("../private/passwd"))
        {    
            $arr = file_get_contents("../private/passwd");
            $arr = unserialize($arr);
            foreach ($arr as $tmp){
                if ($tmp["login"] == $login && $tmp["passwd"] == hash("whirlpool", $passwd));
                    return (TRUE);
            }
        }
        return (FALSE);
    }
?>