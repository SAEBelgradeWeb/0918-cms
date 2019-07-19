<?php

$tasks = $app['db']->fetchAll("tasks");
echo json_encode($tasks);
