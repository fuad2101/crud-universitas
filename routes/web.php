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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/daftar-mahasiswa', 'JurusanController@profile');
Route::get('/blog-mahasiswa', 'JurusanController@profile');
Route::get('/tabel-mahasiswa', 'JurusanController@profile');

Route::get('/', 'JurusanController@index')->middleware('auth');
Route::resource('jurusans', 'JurusanController');
