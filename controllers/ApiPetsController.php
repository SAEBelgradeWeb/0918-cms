<?php
namespace Cms\Controllers;

use Cms\Core\App;

class ApiPetsController {
    public function index()
    {
        $pets =  App::get('db')->fetchAll("pets");

        echo json_encode($pets);
    }

    public function find()
    {
        $pet =  App::get('db')->fetchOne("pets", $_POST);

        echo json_encode($pet[0]);
    }

    public function store()
    {
        App::get('db')->insert("pets", $_POST);

        echo json_encode([
            'result' => 'success'
        ]);
    }

    public function update()
    {
        App::get('db')->update("pets", $_POST);
        echo json_encode([
            'result' => 'success'
        ]);
    }

    public function delete()
    {
        App::get('db')->delete("pets", $_POST);
        echo json_encode([
            'result' => 'success'
        ]);
    }
}