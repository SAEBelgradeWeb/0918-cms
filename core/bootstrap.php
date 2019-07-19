<?php
require "vendor/autoload.php";
$app = [];

$app['config'] = require "config.php";
require "core/functions.php";

$app['db'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
