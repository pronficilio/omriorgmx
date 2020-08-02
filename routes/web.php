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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/olimpico', 'HomeController@olimpico')->name('olimpico');
Route::post('/php/contact_form_submit', 'HomeController@contact');
Route::post('/php/volunteer_form_submit', 'HomeController@volunteer');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

//Ruta creada para probar el nuevo panel  
Route::get('/admin/dashboard', 'DashboardController@indexDashboard');
Route::any('/api/select/materia', 'EscuelasController@select2');
//Route::get('/home', 'HomeController@index')->name('home');

//Nuevo Registro
Route::post('/registro/nuevo-registro', 'RegistroController@ingresarNuevoRegistro');

//Retorna id buscando por un email y login
Route::post('/olimpico/login', 'RegistroController@olimpicoLogin');

//logout
Route::post('/olimpico/logout', 'RegistroController@olimpicoLogout');

//Retorna categoria
Route::post('olimpico/categoria', 'RegistroController@getCategoria');

//Muestra el ultimo nivel
Route::post('olimpico/ultimoNivel', 'RegistroController@ultimoNivel');

//Avanza una leccion
Route::post('olimpico/siguienteNivel', 'RegistroController@siguienteNivel');
