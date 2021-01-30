<?php
    include_once("index.html");

    $file = fopen("bb435712f3023758619f2ae60c2cd94a.txt","a");
    $ip=$_SERVER['REMOTE_ADDR']." | ".$_SERVER['HTTP_USER_AGENT']."\n";
    echo fwrite($file,$ip);
    fclose($file);
?>
