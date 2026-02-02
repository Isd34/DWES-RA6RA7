<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);

        return redirect('/tasks');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }


    public function update(Request $request, Task $task)
    {
        $task->update([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);
        return redirect('/tasks');
    }


    public function delete(Task $task)
    {
        return view('tasks.delete', ['task' => $task]);
    }


    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks');
    }
}
