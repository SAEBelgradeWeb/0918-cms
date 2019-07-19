<?php

$tasks = App::get('db')->fetchAll("tasks");
echo json_encode($tasks);
