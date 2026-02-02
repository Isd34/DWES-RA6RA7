<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaController;
use Illuminate\Http\Request;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', [HolaController::class, 'index']);

Route::get('/suma', [SumaController::class, 'index']);

Route::post('/suma', [SumaController::class, 'sumar']);

// Listar todas las tareas
Route::get('/tasks', [TaskController::class, 'index']);
// Crear tarea: formulario
Route::get('/tasks/create', [TaskController::class, 'create']);
// Crear tarea: guardar
Route::post('/tasks/create', [TaskController::class, 'store']);
// Ver tarea específica
Route::get('/tasks/{task}', [TaskController::class, 'show']);
// Editar tarea: formulario
Route::get('tasks/{task}/edit', [TaskController::class, 'edit']);
// Editar tarea: actualizar
Route::put('tasks/{task}', [TaskController::class, 'update']);
// Borrar tarea: confirmación
Route::get('/tasks/{task}/delete', [TaskController::class, 'delete']);
// Borrar tarea: eliminar
Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);
