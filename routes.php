<?php

if (isset($_SERVER['PATH_INFO'])) :
    $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
endif;

$routes = [
    "/"         => "index.controller.php",
    "/livro"    => "livro.controller.php"
];

carregarController();
