<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = [
            ['title' => '風呂掃除', 'status' => '未着手'],
            ['title' => '布団干し', 'status' => '未着手'],
            ['title' => 'おむつ整理', 'status' => '着手中'],
            ['title' => 'ゴミ捨て', 'status' => '完了'],
        ];

        $todo = array_filter($tasks, function($task){
        return $task['status'] === '未着手';
    });

    $doing = array_filter($tasks, function($task){
        return $task['status'] === '着手中';
    });

    $done = array_filter($tasks, function($task){
        return $task['status'] === '完了';
    });

        return view('tasks.index', compact('todo', 'doing', 'done'));
    }

    
}
