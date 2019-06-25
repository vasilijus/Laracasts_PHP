<?php

require 'database/Connection.php';
require 'database/QuerryBuilder.php';



// // Taking a static method
// $pdo = Connection::make();

// // Passign a connection to the Query, and building the output
// $query = new QuerryBuilder($pdo);

// OR
return new QuerryBuilder(
    Connection::make()
);