<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller{

    public function getIndex(Request $request) {

        return view('tasks.index');
    }
}
