<?php

    function logger($user)
    {
        if(!file_exists('log.txt'))
        {
            file_put_contents('log.txt','');
        }

        $ip = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Kolkata');
        $time = date('d/m/y h:iA', time());
        $contents = file_get_contents('log.txt');
        $contents .= "$ip \t $time \t $user \r";
        file_put_contents('log.txt',$contents);

    }

?>