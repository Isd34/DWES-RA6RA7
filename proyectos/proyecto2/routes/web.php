<?php

use Illuminate\Support\Facades\Route;

// Estas rutas son de la API, y no de la web, y se comportan
// como API
// Cargar rutas API con middleware (guardián de seguridad)
// api para evitar CSRF
// group = grupo, están todas en grupo en un archivo
Route::middleware('api')->group(function () {
    require __DIR__ . '/api.php';
});
