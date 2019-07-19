<?php
$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('about/culture', 'PagesController@aboutCulture');
$router->get('contact', 'PagesController@contact');

//$router->get('api/tasks', 'controllers/api/tasks.php');
//
//$router->post('contact/submit', 'controllers/contact-submit.php');

$router->post('tasks/submit', 'TasksController@store');




