<?php

if(!isset($_POST['completed'])) $_POST['completed'] = 0;

$app['db']->insert("tasks", $_POST);

header('Location: /');