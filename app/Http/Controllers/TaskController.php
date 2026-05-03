<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // タスクの一覧を表示する
    public function index()
    {
        $tasks = Task::all();

        $todo = $tasks->where('status', '未着手');
        $doing = $tasks->where('status', '着手中');
        $done = $tasks->where('status', '完了');

        return view('tasks.index', compact('todo', 'doing', 'done'));
    }

    // タスクの作成フォームを表示する
    public function create()
    {
        return view('tasks.create');
    }

    // タスクを保存する
    public function store(Request $request)
    {
        Task::create([
            'title' => $request->title,
            'status' => $request->status,
        ]);

        return redirect('/tasks');
    }

    // タスクを削除する
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/tasks');
    }
    
    // タスクの編集フォームを表示する
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // タスクを更新する
    public function update(Request $request, Task $task)
    {
        $task->update([
            'title' => $request->title,
            'status' => $request->status,
        ]);

        return redirect('/tasks');
    }
}
