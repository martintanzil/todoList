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

Route::get('/todo','todoController@index')->name('home');
Route::get('/todo/finished','todoController@finished');
Route::get('/todo/new','todoController@new')->name('newForm');
Route::post('todo/new', 'toDoController@add')->name("addTodo");
Route::get('todo/{id}/edit','todoController@edit')->name('editTodo');
Route::post('todo/{id}/edit', 'todoController@update')->name('updateTodo');
Route::get('todo/{id}/delete','todoController@delete')->name('deleteTodo');


