<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
 * * * * * * * * * * * * * * * *
 * * * * * * * * * * * * * * * *
          BASIC ROUTES
 * * * * * * * * * * * * * * * *
 * * * * * * * * * * * * * * * *
*/
Route::get('/', 'PageController@home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');

Route::resource('projects', 'ProjectsController')->middleware('auth');



/*
 * * * * * * * * * * * * * * * *
 * * * * * * * * * * * * * * * *
        PROJECT ROUTES
 * * * * * * * * * * * * * * * *
 * * * * * * * * * * * * * * * *
*/
Route::middleware(['auth', 'can:interact,project'])->group(function () {
    # Project
    Route::get('/projects/{project}', 'ProjectsController@show');      // VIEW PROJECT
    Route::get('/projects/{project}/edit', 'ProjectsController@edit'); // EDIT PROJECT
    Route::post('/projects/{project}', 'ProjectsController@update');   // UPDATE PROJECT
    Route::post('/projects/{project}', 'ProjectsController@destroy');  // DELETE PROJECT
    # Project-task
    Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');     // CREATE TASK
    Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');     // UPDATE TASK
    Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy'); // DELETE TASK
});


/*
 * * * * * * * * * * * * * * * *
 * * * * * * * * * * * * * * * *
         USER ROUTES
 * * * * * * * * * * * * * * * *
 * * * * * * * * * * * * * * * *
*/
Route::middleware('auth')->group(function () {
    Route::get('/users', 'ProfileController@index')->name('users'); // Index
    Route::get('/users/{user}', 'ProfileController@show')->name('profile'); // Show
});

Route::get('/logout','Auth\LoginController@logout')->name('logout');

Auth::routes();
