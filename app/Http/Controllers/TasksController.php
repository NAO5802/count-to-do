<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Enums\TaskKind;
use App\Task;
use App\Http\Requests\TaskRequest;


class TasksController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $kinds = TaskKind::toSelectArray();
        $tasks = Task::where('finished', false)->where('user_id', $user->id )->orderBy('created_at', 'desc')->get();
        return view( 'tasks.index', compact('tasks', 'user', 'kinds'));

    }

    public function store(TaskRequest $request){
        $task = new Task();
        $task->kind = $request->kind;
        $task->memo = $request->memo;
        $task->user_id = Auth::user()->id;
        $task->save();
        return redirect('/');
    }


    public function update(TaskRequest $request, Task $task){

        $task->kind = $request->kind;
        $task->memo = $request->memo;

        if (Auth::user()->id == $task->user_id){
            $task->save();
        }else{
            return redirect ('/')->with('alert_message', '不正なアクセスです');
        }

        return redirect('/');
    }

    public function destroy(Task $task){

        if (Auth::user()->id == $task->user_id){
            $task->delete();
        }else{
            return redirect ('/')->with('alert_message', '不正なアクセスです');
        }
        return redirect('/');
    }

    public function status(Task $task){
        $task->finished = !$task->finished;

        if (Auth::user()->id == $task->user_id){
            $task->save();
        }else{
            return redirect ('/')->with('alert_message', '不正なアクセスです');
        }

        return redirect('/');
    }

} 
