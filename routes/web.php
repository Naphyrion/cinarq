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
    return view('admin.main');
});

Route::get('/resource-log', function () {
    return view('admin.resource-log');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
