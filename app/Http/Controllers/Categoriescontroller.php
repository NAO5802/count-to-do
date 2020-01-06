<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;


class CategoriesController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(){
        $user = Auth::user();
        $names = Category::all();
        return view('categories.index', ['names' => $names, 'user' => $user]);
        
    }
}
