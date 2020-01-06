<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Enums\TaskKind;
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

    public function create(){
        $user = Auth::user();
        $kinds = TaskKind::toSelectArray();
        return view('tasks.create', ['user' => $user, 'kinds' => $kinds] );
    }

    public function store(Request $request){
        $this->validate($request, [
            'kind' => 'required',
        ]);
        $task = new Task();
        $task->kind = $request->kind;
        $task->memo = $request->memo;
        $task->user_id = Auth::user()->id;
        $task->save();
        return redirect('/');
    }
} 
