<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Task;


class TasksController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $tasks = Task::all();
        return view( 'tasks.index', ['tasks' => $tasks, 'user' => $user]);
    }
}
