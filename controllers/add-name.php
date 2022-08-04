<?php

// dd("You post ". $_POST['name']);

$app['database']->insert('users', [
	'name' => $_POST['name'],
]);

header('Location: /');
// require 'views/add-name.view.php';
