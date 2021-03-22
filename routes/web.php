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
Route::get('envia-acceso', 'RegistroController@enviaAcceso');
Route::get('registra-olimpicos','RegistroController@registrarAlumnosEntrenator');
Route::get('/', 'HomeController@index')->name('index');
Route::get('soy-tu-padre', 'HomeController@padre')->name('padre');
/*Route::get("index.php", function(){
	return redirect()->route('index');
});*/
Route::get('registro2', 'HomeController@registro')->name('registro');
Route::get('calendario', 'HomeController@calendario')->name('calendario');
Route::get('nosotros', 'HomeController@nosotros')->name('nosotros');
Route::get('muro-de-fama/{categoria?}', 'HomeController@fama')->name('fama');
Route::get('escuelas', 'HomeController@escuelas')->name('escuelas');
Route::get('reglamento', 'HomeController@reglamento')->name('reglamento');
Route::get('contacto', 'HomeController@contacto')->name('contacto');
Route::get('terminos-y-condiciones', 'HomeController@terminos')->name('terminos'); //
Route::get('aviso-de-privacidad', 'HomeController@aviso')->name('aviso'); //
Route::get('/convocatoria', 'HomeController@convocatoria');
Route::get('/get-alumnitos', 'HomeController@getAlumnitos')->name('get-alumnitos');
Route::post('/php/contact_form_submit', 'HomeController@contact');
Route::post('/php/volunteer_form_submit', 'HomeController@volunteer');

Auth::routes();

//Route::get('/admin', 'AdminController@index')->name('admin');
//Ruta creada para probar el nuevo panel
//Route::get('/admin/dashboard', 'DashboardController@indexDashboard');
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

//Rutas para generar papelitos
Route::get('constancia-participacion/{id?}', 'PapelitosController@constancia')->name("constancia-participacion");
Route::get('reconocimiento-medalla/{id?}', 'PapelitosController@reconocimiento')->name("reconocimiento-medalla");

//Graficas
Route::get('escuelas-ganadoras/{categoria?}', 'GraficaController@muestraMedallas')->name("graficaMedalla");
Route::get('registros/{categoria?}', 'GraficaController@muestraRegistrados')->name("graficaRegistro");
Route::get('resultados/{categoria?}', 'HomeController@competidores')->name("competidores");
Route::any('competidor/{id?}', 'HomeController@competidor')->name("competidor");
Route::get("repetidor/{base64}", 'HomeController@repetidor')->name("repetidor");

//Registrar en Entrenator de forma masiva a las personas que se inscribieron en la olimpiada
Route::get('registroMasivo','RegistroController@registroMasivo')->name('registroMasivo');
//Enivar invitaciones a repetedires de la 14va OMRI para volver a participar
Route::get('enviarInvitacionRepetidores/{iteracion}'.'RegistroController@enviarInvitacionRepetidores')->name('enviarInvitacionRepetidores');
