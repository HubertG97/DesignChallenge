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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ProblemsController@index');
Route::get('problems/create', 'ProblemsController@create');
Route::post('problems/create', 'ProblemsController@store');
Route::get('problems/{problem}', 'ProblemsController@show');
Route::get('problems/{problem}/edit', 'ProblemsController@edit');
Route::patch('problems/{problem}/', 'ProblemsController@update');
