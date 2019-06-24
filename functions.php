<?php

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function connectToDb()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'user', 'Medvedia00');
    
    } catch (PDOException $e) {
        die($e->getMessage());
        die("Could not Connect");
    }
    
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS,'Task');
}