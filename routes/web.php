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
    return view('login');
});

Route::get('/funcional/{matricula}', function ($matricula) {
    die($matricula);
    return view('login');
});


Auth::routes();

Route::get('/register', function () {
    echo "register";
});

Route::get('/home', 'HomeController@index')->name('home');
