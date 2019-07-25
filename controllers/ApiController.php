<?php
namespace Cms\Controllers;

class ApiController {
    public function getSomething()
    {
        $something = [
          'one' => 1,
          'two' => 2,
          'three' => 'Something'
        ];

        echo json_encode($something);

    }
}