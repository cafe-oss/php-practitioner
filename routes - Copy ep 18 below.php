<?php


$router->define([
	'' => 'controllers/index.php',
	'about' => 'controllers/about.php',
	'about/culture' => 'controllers/about-culture.php',
	'contact' => 'controllers/contact.php',
	'names' => 'controllers/add-name.php',
]);


// $router->define('', 'controller/index.php');
// Route::get('', 'controller/index.php');