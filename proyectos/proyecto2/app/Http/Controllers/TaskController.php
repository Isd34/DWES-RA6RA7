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
    public function store(Request $request)
    {
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
    public function show($id)
    {
        $task = Task::find($id);
        if (!$task) {
            return response()->json([
                'error' => 'Tarea no encontrada',
                'message' => "No existe una tarea con ID {$id}"
            ], 404);
        }
        return response()->json($task, 200);
    }

    // Función update para actualizar tareas con control de errores
    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json([
                'error' => 'Tarea no encontrada',
                'message' => "No existe una tarea con ID {$id}"
            ], 404);
        }

        // Validar datos
        $validatedData = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string'
        ]);

        $task->update($validatedData);

        return response()->json([
            'message' => 'Tarea actualizada con éxito.',
            'data' => $task
        ], 200);
    }

    // Función para eliminar tareas con control de errores
    public function destroy($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json([
                'error' => 'Tarea no encontrada',
                'message' => "No existe una tarea con ID {$id}"
            ], 404);
        }

        $task->delete();

        return response()->json([
            'message' => 'Tarea eliminada exitosamente'
        ], 200);
    }
}
