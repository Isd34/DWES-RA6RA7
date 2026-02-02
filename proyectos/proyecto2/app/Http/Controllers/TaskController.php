<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Listar todas las tareas
    public function index()
    {
        return Task::all();
    }

    // Crear una nueva tarea
    public function store(Request $request) {
        // Validar datos de entrada
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string'
        ]);
        $task = Task::create($validatedData);
        return response()->json([
            'message' => 'Tarea creada exitosamente',
            'data' => $task
        ], 201);
    }

    // Mostrar una tarea específica
    public function show($id) {
        $task = Task::find($id);
        if (!$task) {
            return response()->json([
                'error' => 'Tarea no encontrada',
                'message' => "No existe una tarea con ID {$id}"
            ], 404);
        }
        return response()->json($task, 200);
    }

    // Actualizar una tarea
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return $task;
    }

    // Eliminar una tarea
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return response()->noContent();
    }
}
