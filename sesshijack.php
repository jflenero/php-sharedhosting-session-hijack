<?php
$dir = session_save_path() ? session_save_path()."/" : "/tmp/";

// Session Mapping
/*$sessions = array();
foreach (glob($dir."sess_*") as $filename){
    $sessions[] = str_replace($dir, "", $filename);
}
print_r($sessions,false);*/

foreach (glob($dir."sess_*") as $filename){
    $session = file_get_contents($filename);
    $filename = str_replace($dir, "", $filename);
    session_decode($session);
    echo '<pre>';
    echo $filename;
    print_r($_SESSION);
    echo '</pre>';
}
