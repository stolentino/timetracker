<?php

try {
    //$db = new PDO("sqlite:".--DIR--."/databse.db);
    //$db->setAttribute(PDO::ATTR_ERRMODE_EXCEPTION);

    $user = 'root';
    $password = 'root';
    $db = 'timetracker';
    $host = 'localhost';
    $port = 8889;

    $link = mysqli_init();
    $success = mysqli_real_connect(
    $link, 
    $host, 
    $user, 
    $password, 
    $db,
    $port
    );

} catch (Exception $e){
    echo $e->getMessage();
    exit;

}
//var_dump($db);
