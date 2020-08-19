<?php
//application functions
function get_project_list(){
    include 'inc/connection.php';

    try{
        //$sql = "SELECT * FROM projects";
        //$result = $db->prepare($sql);
        //$result->execute();

        return $db->query('SELECT project_id, title, category FROM projects');
    } catch (Exception $e){
        echo "Error!: " . $e->getMessage() . "</br>";
        return array();
    }
}