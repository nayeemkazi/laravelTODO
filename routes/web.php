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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/todos', 'TodosController@index');
Route::post('/todos/create', 'TodosController@create');
Route::get('/todos/{todo}', 'TodosController@destroy')->name('todos.destroy');
Route::get('/todos/update/{todo}', 'TodosController@update')->name('todos.update');
Route::post('/todos/edit/{id}', 'TodosController@edit')->name('todos.edit');
Route::get('/todos/completed/{id}', 'TodosController@completed')->name('todos.completed');
