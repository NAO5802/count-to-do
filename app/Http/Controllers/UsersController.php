<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\User;

use App\Enums\TaskKind;
use App\Task;



class UsersController extends Controller
{

    public function show(User $user){

    if (Auth::user()->id == $user->id){
        
        $kinds = TaskKind::getValues();
    
        $tasks = Task::where('finished', true)->where('user_id', $user->id)->get();
        $counts = [];
            foreach ($kinds as $kind) {
                array_push($counts, $tasks->where('kind', $kind)->count());
            }
    
        return view('users.show', ['kinds' => $kinds,'counts' => $counts, 'tasks' => $tasks, 'user'=> $user]);

    }else{
        return redirect ('/')->with('alert_message', '不正なアクセスです');
    }

    }
    
    public function edit(User $user){
        if (Auth::user()->id == $user->id){
            return view('users.edit')->with('user', $user);
        }else{
            return redirect ('/')->with('alert_message', '不正なアクセスです');
        }
    }

    public function update(Request $request, User $user){
        $this->validate($request, [
            'name' => 'required',
            'email' => ['required', Rule::unique('users')->ignore($user->id)]
        ]);
        $user->name = $request->name;
        $user->email = $request->email;

        if (Auth::user()->id == $user->id){
            $user->save();
        }else{
            return redirect ('/')->with('alert_message', '不正なアクセスです');
        }

        return redirect('/');
    }

    public function destroy(User $user){
        if (Auth::user()->id == $user->id){
            $user->delete();
        }else{
            return redirect ('/')->with('alert_message', '不正なアクセスです');
        }
        return redirect('/');
    }
}

