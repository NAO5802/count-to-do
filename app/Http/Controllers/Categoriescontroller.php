<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class Categoriescontroller extends Controller
{
    //
    public function index(){
        // $names = Category::all();
        return view('categories.index');
        // , ['names' => $names]
    }
}
