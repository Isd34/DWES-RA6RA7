<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Rutas de API
Route::get('/tasks', [TaskController::class, 'index']);       // Listar todas las tareas
Route::get('/tasks/{id}', [TaskController::class, 'show']);   // Ver una tarea
Route::post('/tasks', [TaskController::class, 'store']);      // Crear una tarea
Route::put('/tasks/{id}', [TaskController::class, 'update']); // Actualizar una tarea
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']); // Eliminar una tarea
