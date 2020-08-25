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

function add_project($title, $category){
    include 'inc/connection.php';

    $sql = 'INSERT INTO projects(title, category) VALUES(?, ?)';

    try{
        $results = $db->prepare($sql);
        $results->bindValue(1, $title, PDO::PARAM_STR);
        $results->bindValue(2, $category, PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e){
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }

    return true;
}

function get_task_list(){
    include 'inc/connection.php';

    $sql = 'SELECT tasks.*, projects.title as project FROM tasks' 
    . ' JOIN projects ON tasks.project_id = projects.project_id';

    try{

        return $db->query($sql);
    } catch (Exception $e){
        echo "Error!: " . $e->getMessage() . "</br>";
        return array();
    }
}

function add_task($project_id, $title, $date, $time){
    include 'inc/connection.php';

    $sql = 'INSERT INTO tasks(project_id, title, date, time) VALUES(?, ?, ?, ?)';

    try{
        $results = $db->prepare($sql);
        $results->bindValue(1, $project_id, PDO::PARAM_INT);
        $results->bindValue(2, $title, PDO::PARAM_STR);
        $results->bindValue(3, $date, PDO::PARAM_STR);
        $results->bindValue(4, $time, PDO::PARAM_INT);
        $results->execute();
    } catch (Exception $e){
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }

    return true;
}