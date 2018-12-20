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
Route::group(['prefix' => 'doctor'], function() {
    //prefijo 'doctor'
        Route::get('home', 'HomeController@index')->name('home');
        Route::get('consultapaciente', 'Doctor\PacienteController@index')->name('consultapaciente');
        Route::get('paciente/{id_paciente?}', 'Doctor\PacienteController@show')->name('consulta');
        Route::post('registro',  'Doctor\ConsultaController@insertar')->name('registro');
        Route::post('diagnostico',  'Doctor\ConsultaController@diagnostico')->name('insertardiagnostico');
        Route::get('citamedica', 'Doctor\ConsultaController@cita');
        Route::get('pacientes', 'Doctor\PacienteController@listapacientes')->name('pacientes');
});

//Route::get('/importar', 'ExcelController@importar')->name('importar'); //Importar archivos excel a mysql.*/
/********************************************************************************************************/
/*RUTAS ASISTENTE*/
Route::group(['prefix' => 'asistente'], function() {
    Route::get('home', 'asistente\AsistenteController@index')->name('asistentehome');
    Route::get('pacientes', 'asistente\PacienteController@listapacientes')->name('asistentepacientes');
    Route::get('crearpaciente', 'asistente\PacienteController@verpacientes')->name('crearpaciente');
    Route::get('editarpaciente', 'asistente\PacienteController@editarpacientes')->name('editarpaciente');
    Route::get('paciente', 'asistente\PacienteController@pacientes');
    Route::get('paciente1', 'asistente\PacienteController@paciente')->name('asistentepaciente');
    Route::get('medicamentos', 'asistente\FarmaciaController@index');
    Route::get('listamedicamentos', 'asistente\FarmaciaController@listamedicamentos');
    Route::get('reportes', 'asistente\ReportesController@index')->name('reportes');
    Route::get('botiquinsucursal', 'asistente\FarmaciaController@verbotiquin');
});
Route::group(['prefix' => 'asistente'], function() {
    Route::get('{id_paciente?}', 'Paciente\PacienteController@verpaciente');
    Route::get('editar/{id_medicamento?}', 'asistente\FarmaciaController@editarmedicamento');
    Route::get('ver/{id_medicina?}', 'asistente\FarmaciaController@vermedicamento');

});

Route::group(['prefix' => 'asistente'], function() {
    Route::post('pacienteasis', 'asistente\PacienteController@crearpaciente')->name('agregarpaciente');
    Route::post('ingresoprocedimiento', 'asistente\AsistenteController@ingresoprocedimiento')->name('ingreso_procedimiento');
    Route::post('ingresomedicamento', 'asistente\FarmaciaController@ingresar')->name('ingreso_medicamento');
    Route::post('medicamentoingresado', 'asistente\FarmaciaController@agregarmedicamento')->name('agregarmedicamento');
    Route::post('editarmedicamento', 'asistente\FarmaciaController@editar')->name('editar_medicamento');
});




//Route::get('/asistente/procedimientos', 'asistente\AsistenteController@procedimiento')->name('procedimientos');

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
