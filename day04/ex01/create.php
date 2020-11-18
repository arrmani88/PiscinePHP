<?php 

    $log = $_POST["login"];
    $pass = $_POST["passwd"];
    $sub = $_POST["submit"];
    if ($sub != "OK" || $log == "" || $pass == "")
        exit("ERROR\n");
    else
    {
        if (!file_exists("../private"))
            mkdir("../private");
        if (file_exists("../private/passwd"))
        {
            $data = file_get_contents("../private/passwd");
            $data = unserialize($data);
            if ($data)
            {
                foreach($data as $us)
                {
                    if ($us['login'] == $log)
                        exit("ERROR\n");  
                }
            }
        }
        $pas_hash = hash('whirlpool', $pass);
        $arr = array("login" => $log , "passwd" => $pas_hash);
        $data[] = $arr;
        file_put_contents("../private/passwd", serialize($data));
            echo ($sub)."\n";

    }
?>