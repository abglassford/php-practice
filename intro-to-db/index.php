<?php

$database = require 'src/bootstrap.php';

$router = new Router;

require Router::load('routes.php')
  ->direct(Request::uri());
