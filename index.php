<?php 

require 'database/Connection.php';
require 'database/QuerryBuilder.php';
require 'Task.php';

// Taking a static method
$pdo = Connection::make();

// Passign a connection to the Query, and building the output
$query = new QuerryBuilder($pdo);

// Using another method from the Querry Builder
$tasks = $query->selectAll('todos');
var_dump($tasks);

require 'index.view.php';
