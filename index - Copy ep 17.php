<?php

require 'functions.php';

require 'core/bootstrap.php';

// dd(Router::load('routes.php')
// 	->direct(Request::uri()));

require Router::load('routes.php')
	->direct(Request::uri());

