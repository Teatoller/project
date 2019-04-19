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

/*
    GET /projects (index)
    GET /projects/create (create)
    GET /projects/1 (show)
    GET /projects/store (store)
    GET /projects/1/edit (edit)
    GET /projects/1 (update)
    GET /projects/1 (destroy)
*/

Route::resource('projects', 'ProjectsController');
// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{projects}', 'ProjectsController@show');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/{projects}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{projects}', 'ProjectsController@update');
// Route::delete('/projects/{projects}', 'ProjectsController@destroy');
