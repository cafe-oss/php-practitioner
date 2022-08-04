<?php

class Router
{


	public static function load($file)
	{
		$router = new static;

		require $file;

		return $router;
	}

	public function define($routes)
	{
		$this->routes = $routes;
	}

	public function direct($uri)
	{
		// given the current uri that the user pass, it check if there is an existing value that matches inside the router associative array data

		if(array_key_exists($uri, $this->routes))
		{
			return $this->routes[$uri];
		}

		throw new Exception('No route define for this URI.');
	}
}