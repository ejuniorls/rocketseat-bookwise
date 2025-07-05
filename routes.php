<?php

if (isset($_SERVER['PATH_INFO'])) :
    $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
endif;

carregarController();
