<?php 

$query = require 'bootstrap.php';

require 'Task.php';


// Using another method from the Querry Builder
$tasks = $query->selectAll('todos', 'Task');

// $tasks = array_map( function($task) {
//     $t = new Task();
//     $t->description = $task->description;
//     $t->completed = $task->completed;
//     return $t;
// },$tasks);



var_dump($tasks);

require 'index.view.php';
