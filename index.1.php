<?php 

require 'functions.php';

class Task {

    public $description;
    public $completed = false;

    public function __construct($description)
    {
        // Automatically trigger on instantiation
        $this->description = $description;

    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete() {
        return $this->completed;
    }
}

$tasks = [
    new Task("Go to shop"),
    new Task("Get Milk"),
    new Task("Get Bread"),
    new Task("bring home")
];
$tasks[1]->complete();

// dd($tasks);
require 'index.view.php';