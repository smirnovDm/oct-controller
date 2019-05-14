<?php


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/tasks', 'TaskController@index')->name('tasks_index');
Route::post('/tasks', 'TaskController@store')->name('tasks_store');
Route::delete('/tasks/{task}', 'TaskController@destroy')->name('tasks_destroy');
//Route::resource('tasks', 'TaskController');
//Route::resource('news', 'NewsController');
