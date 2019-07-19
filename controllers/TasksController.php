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

}