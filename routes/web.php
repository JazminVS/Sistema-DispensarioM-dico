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
        Route::get('pacientes', 'Paciente\PacienteController@index')->name('pacientes');
});

//Route::get('/importar', 'ExcelController@importar')->name('importar'); //Importar archivos excel a mysql.*/
/********************************************************************************************************/
/*RUTAS ASISTENTE*/
Route::group(['prefix' => 'asistente'], function() {
    Route::get('home', 'asistente\AsistenteController@index')->name('asistentehome');
    Route::get('pacientes', 'asistente\AsistenteController@ingresar');
    Route::get('paciente', 'Paciente\PacienteController@paciente');
    Route::get('medicamentos', 'asistente\FarmaciaController@index');
    Route::get('botiquinasucursales', 'asistente\FarmaciaController@sucursales');
    Route::get('/reportes', 'asistente\AsistenteController@reportes')->name('reportes');
    Route::get('botiquinsucursal', 'asistente\FarmaciaController@verbotiquin');
});
Route::group(['prefix' => 'asistente'], function() {
    Route::get('{id_paciente?}', 'Paciente\PacienteController@verpaciente');
    Route::get('editar/{id_medicamento?}', 'asistente\FarmaciaController@editarmedicamento');
    Route::get('ver/{id_medicina?}', 'asistente\FarmaciaController@vermedicamento');

});

Route::group(['prefix' => 'asistente'], function() {
    Route::post('pacienteasis', 'Paciente\PacienteController@crear')->name('crearpaciente');
    Route::post('ingresoprocedimiento', 'asistente\AsistenteController@ingresoprocedimiento')->name('ingreso_procedimiento');
    Route::post('ingresomedicamento', 'asistente\FarmaciaController@ingresar')->name('ingreso_medicamento');
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
