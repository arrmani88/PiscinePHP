<?php

 $log = $_POST["login"];
 $oldp = $_POST["oldpw"];
 $newp = $_POST["newpw"];
 $sub = $_POST["submit"];
if ($sub != "OK" || $log == "" && $oldp == "" || $newp == "")
    exit("ERROR\n");
else
{
    $data = file_get_contents("../private/passwd");
    $data = unserialize($data);
    foreach($data as $x => $uspa)
    {
        if ($uspa['login'] == $log)
        {
            if ($uspa['passwd'] === hash('whirlpool', $oldp))
            {
                $data[$x]['passwd'] = hash('whirlpool', $newp);
                $data = serialize($data);
                file_put_contents("../private/passwd",$data);
                echo ($sub)."\n";
            }
            else
                exit("ERROR\n");
        }
    }
}
?>