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
        $task = Task::create($request->all());
        return response()->json($task, 201);
    }

    // Mostrar una tarea específica
    public function show($id)
    {
        return Task::findOrFail($id);
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
