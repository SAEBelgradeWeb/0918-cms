<?php
namespace Cms\Controllers;

use Cms\Core\App;

class AdminTasksController {
    public function index()
    {
        $tasks =  App::get('db')->fetchAll("tasks");
        return view('admin-tasks', compact('tasks'));
    }

    public function find()
    {
        $pet =  App::get('db')->fetchOne("tasks", $_POST);

        echo json_encode($pet[0]);
    }

    public function store()
    {
        App::get('db')->insert("tasks", $_POST);

        echo json_encode([
            'result' => 'success'
        ]);
    }

    public function update()
    {
        App::get('db')->update("tasks", $_POST);
        echo json_encode([
            'result' => 'success'
        ]);
    }

    public function delete()
    {
        App::get('db')->delete("tasks", $_GET);
        return redirect('/admin/tasks');
    }
}