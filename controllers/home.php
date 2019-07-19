<?php

$tasks = $app['db']->fetchAll("tasks");

require "views/index.view.php";