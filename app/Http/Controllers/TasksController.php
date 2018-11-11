<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TaskRepository;

class TasksController extends Controller{

    protected $task;

    public function __construct(TaskRepository $task)
    {
        $this->task = $task;
    }

    public function index(){

        $tasks = $this->task->getAll();

        return view('tasks.index', ['tasks' => $tasks]);
    }
}
