<?php

try {
    //$db = new PDO("sqlite:".__DIR__."/database.db");
    //$db->setAttribute(PDO::ATTR_ERRMODE_EXCEPTION);
    $db = new PDO("mysql:host=localhost;dbname=timetracker;port=8889","root","root");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (Exception $e){
    echo "Unable to connect <br>";
    echo $e->getMessage();
    exit;
    
}
//var_dump($db);

