<?php

function dd(...$data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function carregarController()
{
    $controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

    if (!$controller) $controller = "index";

    if (!file_exists("controllers/{$controller}.controller.php")) :
        abort(404);
    endif;

    require_once "controllers/{$controller}.controller.php";
}

function abort($code)
{
    http_response_code($code);
    view($code);
    die();
}

function view($view, $data = [])
{
    foreach ($data as $key => $value) :

        $$key = $value;

    endforeach;

    require_once 'views/template/app.php';
}
