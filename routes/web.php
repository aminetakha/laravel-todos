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

Route::get('todos', 'TodosController@index');

Route::get('todo/{todo}/detail', 'TodosController@detail');

Route::get('todo/{todo}/update', 'TodosController@update');

Route::post('todo/update-confirm', 'TodosController@updateConfirm');

Route::get('todo/{todo}/delete', 'TodosController@delete');

Route::get('todo/{todo}/complete', 'TodosController@complete');

Route::get('todos/add', 'TodosController@add');

Route::post('/todo/add-confirm', 'TodosController@addConfirm');
