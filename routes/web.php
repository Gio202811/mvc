<?php

use Lib\Route;

use App\Controllers\HomeController;
use App\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index']);

// Login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

// Contacto
Route::get('/contact', function() {
    return 'hola desde la pagina contacto';
});

// Acerca de
Route::get('/about', function() {
    return 'hola desde la pagina acerca de';
});

// Cursos
Route::get('/courses/:slug', function($slug) {
    return 'El curso es: ' . $slug;
});

// /courses/php

Route::dispatch();