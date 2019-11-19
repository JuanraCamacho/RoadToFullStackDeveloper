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

//Route::get('login', 'LoginController@create');

// Route::view('login','Login');

// Route::get('login/{nombre}','LoginController@index');//paramateros obligado
// //'login/{nombre?   } opcional

//Route::get('admin/sistem/login','LoginController@index') ->name('login') ;

// Rutas de cliente
Auth::routes();

Route::get('/', 'LoginController@index');
Route::get('/index', 'IndexController@index')->name('index');
Route::get('/index/cursos', 'CursosController@index')->name('cursos');
Route::get('/index/recursos', 'RecursosController@index')->name('recursos');

Route::get('/login2','Login2Controller@index');

// Rutas administrador

Route::get('/administrador','Admin\LoginController@index');
Route::get('/administrador/home','Admin\HomeController@index');

Route::get('/administrador/areas','Admin\AreaController@index');
Route::get('/administrador/areas/create','Admin\AreaController@create');
Route::get('/administrador/areas-{id}/edit','Admin\AreaController@edit');
Route::get('/administrador/areas-{id}/delete','Admin\AreaController@delete');

Route::get('/administrador/areas-{id}/temas','Admin\TemaController@index');
Route::get('/administrador/areas/temas/create','Admin\TemaController@create');


Route::get('/administrador/cursos','Admin\CursoController@index');
Route::get('/administrador/cursos/create','Admin\CursoController@create');
