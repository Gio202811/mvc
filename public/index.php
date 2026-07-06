<?php

require_once '../lib/Route.php';

use Lib\Route;

Route::get('/', function() {
    echo 'hola dsde la pagina principal';
});

Route::get('/', function() {
    echo 'hola dsde la pagina contacto';
});

Route::get('/', function() {
    echo 'hola dsde la pagina acerca de';
});