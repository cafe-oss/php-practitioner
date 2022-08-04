<?php

class Router
{
	public $routes = [
		'GET' => [],
		'POST' => [],

	];

	public static function load($file)
	{
		$router = new static;

		require $file;

		return $router;
	}

	public function get($uri, $controller)
	{
		// store $controller in the $this->routes specifically ['GET'] in the item [$uri]
		$this->routes['GET'][$uri] = $controller;
	}	

	public function post($uri, $controller)
	{
		// store $controller in the $this->routes specifically ['GET'] in the item [$uri]
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct($uri, $requestType)
	{
		// given the current uri that the user pass, it check if there is an existing value that matches inside the router associative array data
		
		if(array_key_exists($uri, $this->routes[$requestType]))
		{
			return $this->routes[$requestType][$uri];
		}

		throw new Exception('No route define for this URI.');
	}
}