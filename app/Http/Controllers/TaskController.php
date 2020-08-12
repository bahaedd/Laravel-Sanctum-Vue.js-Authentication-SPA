<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(Request $request)
    {
        $task = Task::create([
            'task' => $request->task
        ]);

        return response()->json([
            'message' => 'Task created successflly !'
        ], 200);
    }

    public function show()
    {
        return response()->json([
            'tasks'  => Task::all(),
        ],200);
    }
}
