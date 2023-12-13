<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:10|max:255',
            'description' => 'nullable'
        ]);

        $task = new Task;
        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();

        return redirect()->route('tasks.show', ['task' => $task]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'name' => 'required|min:10|max:255',
            'description' => 'nullable'
        ]);

        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();

        return redirect()->route('tasks.show', ['task' => $task]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }

    public function updateCompletedStatus(Task $task)
    {
        $task->completed = true;
        $task->save();

        return redirect()->route('tasks.show', ['task' => $task]);
    }
}
