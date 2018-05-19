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
})->name('welcome');
// comienzan rutas AUTH (autentificación de laravel)

//erika
Route::get('Antecedentes/grupo/{id}', 'inscripcionesController@guardarGrupo')->name('guardarGrupo');
Route::Resource('inscripciones', 'inscripcionesController'); // registra 6 rutas
Route::get('verantecedentes/{id}','InscripcionesController@verAntecedentes')->name('verAntecedentes');
Route::get('confirmarinscripciones','InscripcionesController@confirmarInscripciones')->name('confirmarInscripciones');
Route::get('cambiarestatus/{id}','InscripcionesController@cambiarStatus')->name('cambiarStatus');
//Route::get()

//JAVIER
Route::Resource('grupos', 'GrupoController');
//Route::

Route::get('/home', 'HomeController@index')->name('home');

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
        // Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
        // Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/home', 'HomeController@index')->name('home');
// termina AUTH
Route::get('datospersonales/{id}','AlumnaController@show')->name('datospersonales');
Route::get('modificardatospersonales/{id}','AlumnaController@edit')->name('modificardatospersonales');
Route::post('actualizardatospersonales/{idAlumna}','AlumnaController@update')->name('actualizardatospersonales');
