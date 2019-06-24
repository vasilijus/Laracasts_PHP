<?php

class Connection
{
    public static function make()
    {
        
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'user', 'Medvedia00');
        
        } catch (PDOException $e) {
            die($e->getMessage());
            die("Could not Connect");
        }
        
    
    }

}

// $connection = new Connection();

// $connection->make();

// Connection::make();