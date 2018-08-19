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
    return view('login',['matricula' => null]);
});

Route::get('funcional/{matricula?}', 'FuncionalController@index');
Route::post('funcional/dados-publicos', 'FuncionalController@funcionalPublica')->name('funcionalPublica');

Route::resource('funcional', 'FuncionalController');


Auth::routes();

Route::get('register', function () {
    echo "register";
})->name('register');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', function () {
    return view('login',['matricula' => null]);
})->name('login');
