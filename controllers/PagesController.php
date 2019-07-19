<?php
namespace Cms\Controllers;

use Cms\Core\App;

class PagesController {

    public function home()
    {
        $tasks = App::get('db')->fetchAll("tasks");

        return view('index', compact('tasks'));
    }

    public function about()
    {

        return view('about');
    }

    public function aboutCulture()
    {
        return view('about-culture');
    }

    public function contact()
    {
        return view('contact');
    }
}