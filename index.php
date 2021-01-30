<?php
    include_once("index.html");

    $file = fopen("ip.txt","a");
    $ip=$_SERVER['REMOTE_ADDR']." | ".$_SERVER['HTTP_USER_AGENT']."\n";
    echo fwrite($file,$ip);
    fclose($file);
?>
