<?php

use Cms\Core\Request;
use Cms\Core\Router;

require "../core/bootstrap.php";

Router::load('../routes.php')
    ->direct(Request::uri(), Request::method());



