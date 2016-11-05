<?php
$app = [];

$app['config'] = require 'config.php';

require 'src/Router.php';
require 'src/Request.php';
require 'src/database/Connection.php';
require 'src/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
  Connection::make($app['config']['database'])
);
