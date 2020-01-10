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
        $kinds = TaskKind::getValues();

        $tasks = Task::where('finished', true)->where('user_id', $user->id)->get();
        $counts = [];
        if ($tasks) {
            foreach ($kinds as $kind) {
                array_push($counts, $tasks->where('kind', $kind)->count());
            }
        }

        return view('users.show', ['kinds' => $kinds,'counts' => $counts, 'tasks' => $tasks, 'user'=> $user]);
    }
    
    public function edit(User $user){
        return view('users.edit')->with('user', $user);
    }

    public function update(Request $request, User $user){
        $this->validate($request, [
            'name' => 'required',
            'email' => ['required', Rule::unique('users')->ignore($user->id)]
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect('/');
    }
}
