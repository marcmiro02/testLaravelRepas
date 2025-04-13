<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('welcome', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required|string|max:255',
            'task_description' => 'required|string|max:1000',
            'task_status' => 'required|in:pending,completed',
            'task_due_date' => 'required|date',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('edit_task', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'task_name' => 'required|string|max:255',
            'task_description' => 'required|string|max:1000',
            'task_status' => 'required|in:pending,completed',
            'task_due_date' => 'required|date',
        ]);

        $task = Task::findOrFail($id);
        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }
}

?>