<?php

require 'functions.php';

class Task
{

	public $description;
	public $completed = false;

	public function __construct($description)
	{
		$this->description = $description;

	}

	public function complete()
	{
		$this->completed = true;
	}

	public function isComplete()
	{
		return $this->completed;
	}
	
}

// $task = new Task('Goto the store');

// $task->complete();
// var_dump($task->isComplete());
// dd($task);

$tasks = [
	new Task('Go to the store'),
	new Task('Finish my screencast'),
	new Task('Clean my room'),
];

$tasks[0]->complete();
$tasks[1]->complete();



// dd($task);
require 'index.view.php';

