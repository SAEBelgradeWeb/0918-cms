<?php
namespace Cms\Controllers;

use Cms\Core\App;

class TasksController {

    public function store()
    {
        if(!isset($_POST['completed'])) $_POST['completed'] = 0;

        App::get('db')->insert("tasks", $_POST);

        return redirect('/');
    }

    public function apiGet()
    {
        $tasks = App::get('db')->fetchAll("tasks");

        echo json_encode($tasks);
    }

}