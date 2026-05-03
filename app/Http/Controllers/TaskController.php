<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::all();

        $todo = $tasks->where('status', '未着手');
        $doing = $tasks->where('status', '着手中');
        $done = $tasks->where('status', '完了');

        return view('tasks.index', compact('todo', 'doing', 'done'));
    }

    
}
