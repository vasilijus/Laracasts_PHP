<?php 

require 'Task.php';
require 'database/Connection.php';
require 'database/QuerryBuilder.php';

$pdo = Connection::make();

$query = new QuerryBuilder($pdo);

$tasks = $query->selectAll('todos');
// var_dump($tasks);

require 'index.view.php';