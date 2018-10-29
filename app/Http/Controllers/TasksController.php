<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller{

    public function index(Task $task){

        $result = $task->all();

        return view('tasks.index', ['tasks' => $result]);
    }
}
