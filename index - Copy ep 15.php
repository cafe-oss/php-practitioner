<?php

require 'functions.php';
require 'Task.php';

// require 'database/Connection.php';
// require 'database/QueryBuilder.php';
$database = require 'core/bootstrap.php';

// $pdo = connectToDb();

// $tasks = selectAll($pdo);

// $tasks = $statement->fetchAll(PDO::FETCH_OBJ);

// var_dump($tasks[0]->foobar());



$tasks = $database->selectAll('todos', 'Task');


// dd($tasks);
require 'views/index.view.php';


