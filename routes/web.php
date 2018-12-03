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
/********************************************************************************************************/
/*RUTAS DOCTOR*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/consultapaciente', 'Doctor\PacienteController@index')->name('consultapaciente');
Route::get('/paciente/{id_paciente?}', 'Doctor\PacienteController@show')->name('consulta');
Route::post('registro', 'Doctor\ConsultaController@insert')->name('registro');

Route::post('/posts', 'Doctor\PacienteController@store')->name ('diagnostico');
Route::get('/diagnostico', 'Doctor\DiagnosticoController@index')->name('diagnostico');

Route::post('/citamedica', 'Doctor\ConsultaController@cita');
Route::get('/pacientes', 'Paciente\PacienteController@index')->name('pacientes');
//Route::get('/importar', 'ExcelController@importar')->name('importar'); //Importar archivos excel a mysql.
/********************************************************************************************************/
/*RUTAS ASISTENTE*/
Route::get('/asistente', 'asistente\AsistenteController@index')->name('asistente');
Route::get('/asistente/usuario', 'asistente\AsistenteController@ingresar');
Route::post('asistente/pacienteasis', 'Paciente\PacienteController@create')->name('pacienteasis');
/********************************************************************************************************/
/*RUTAS PACIENTE*/
Route::get('/pacientes/{id_paciente?}', 'Paciente\PacienteController@show')->name('datosfiliacion');



//Auth::routes();
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');/*password.email*/
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email'); /*password.email*/
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset'); /*password.reset*/
$this->post('password/reset', 'Auth\ResetPasswordController@reset');
