<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\User;


class UsersController extends Controller
{
    
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
