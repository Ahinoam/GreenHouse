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

Route::get('/perfil', 'Auth\UserController@showPerfil')->name('perfil');
Route::get('/perfil/direcciones', 'DireccionController@create')->name('perfil.direcciones');
Route::post('/perfil/direcciones', 'DireccionController@store')->name('direcciones.store');

Route::get('/contacto', "ContactoController@create")->name('contacto');
Route::get('/productouser', 'ProductoUserController@index')->name('productouser');
Route::resource('parcelas', 'ParcelaController');

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

    Route::resource('departamentos', 'DepartamentoController');
    Route::resource('marcas', 'MarcaController');
    Route::resource('productos', 'ProductoController');
});
