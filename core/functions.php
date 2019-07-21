<?php
/*
 * Utility functions
 */

function dd($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}

function view($viewName, $data=[]) {
    extract($data);
    require "../resources/views/{$viewName}.view.php";
}

function redirect($path) {
    header("Location: {$path}");
}

