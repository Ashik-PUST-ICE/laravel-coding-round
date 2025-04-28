<?php

namespace App\Http\Controllers;


use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

 public function taskStore(Request $request)
 {

     $validated = $request->validate([
         'title' => 'required|string',
     ]);
     $task = Task::create($validated);
     return response()->json($task, 201);
 }

 public function taskUpdate(Request $request, $id)
 {
     $validated = $request->validate([
         'is_completed' => 'required|boolean',
     ]);

     $task = Task::find($id);

     if (!$task) {
         return response()->json(['message' => 'Task not found'], 404);
     }

     $task->is_completed = $request->input('is_completed');
     $task->save();
     return response()->json($task);
 }

    public function taskPending()
    {
        $tasks = Task::where('is_completed', false)->get();

        return response()->json($tasks);
    }
}
