<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TasksController@index');
Route::post('tasks', 'TasksController@store');
Route::get('/tasks/{task}/edit', 'TasksController@edit');
Route::patch('/tasks/{task}', 'TasksController@update');
Route::delete('/tasks/{task}', 'TasksController@destroy');
Route::patch('/tasks/{task}/status', 'TasksController@status');


Route::get('users/{user}/show', 'UsersController@show');
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::patch('/users/{user}', 'UsersController@update');
Route::delete('users/{user}', 'UsersController@destroy');
Auth::routes();


