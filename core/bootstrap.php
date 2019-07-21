<?php

use Cms\Core\App;
use Cms\Core\Database\Connection;
use Cms\Core\Database\QueryBuilder;

require "../vendor/autoload.php";

App::bind('config', require "../config.php");

require "../core/functions.php";

App::bind('db', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
