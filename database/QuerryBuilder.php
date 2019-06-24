<?php

class QuerryBuilder
{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        # code...
        $this->pdo = $pdo;

    }
    function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

}