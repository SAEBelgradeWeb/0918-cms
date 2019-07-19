<?php
$router->get('', 'controllers/home.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->get('contact', 'controllers/contact.php');

$router->get('api/tasks', 'controllers/api/tasks.php');

$router->post('contact/submit', 'controllers/contact-submit.php');
$router->post('tasks/submit', 'controllers/task-submit.php');




