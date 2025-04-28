<?php

namespace App\Http\Controllers;



use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
        ]);

        $task = Task::create($validated);

        return response()->json($task, 201);
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $validated = $request->validate([
            'is_completed' => 'required|boolean',
        ]);

        $task->update($validated);

        return response()->json($task);
    }

    public function pending()
    {
        $tasks = Task::where('is_completed', false)->get();

        return response()->json($tasks);
    }
}
