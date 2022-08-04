<?php

$app = [];

require 'functions.php';

require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

require 'core/Router.php';

require 'core/Request.php';

// $config = require 'config.php';
// $pdo = Connection::make();

// $query = new QueryBuilder($pdo);

 // return new QueryBuilder(
 // 	Connection::make($config['database'])
 // );

$app['config'] = require 'config.php';


$app['database'] = new QueryBuilder(
 	Connection::make($app['config']['database'])
 );