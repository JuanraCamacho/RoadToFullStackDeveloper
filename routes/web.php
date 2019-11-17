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

//Route::get('login', 'LoginController@create');

// Route::view('login','Login');

// Route::get('login/{nombre}','LoginController@index');//paramateros obligado
// //'login/{nombre?   } opcional

//Route::get('admin/sistem/login','LoginController@index') ->name('login') ;
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
