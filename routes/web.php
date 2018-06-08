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
# Middleware group if user is successfully logged in

    //Route que carga el inicio de session
    Route::get('/', function () {
        return view('auth/login');
    });

    //Route para autenticacion
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {


//Route generales con sus funciones básicas
   
    Route::resource('activities', 'ActivityController');
    Route::resource('consultants', 'ConsultantController');
    Route::resource('companies', 'CompanyController');
    Route::resource('businessusers', 'BusinessUserController');
    Route::resource('registeractivities', 'RegisterActivityController');
    Route::resource('users', 'UserController');

//Route para traer datos en datatables
    
    Route::get('consultant', 'ConsultantController@getConsultant')->name('datatable.consultant');
    
    Route::get('registeractivity', 'RegisterActivityController@getRegActivity')->name('datatable.registeractivity');
    
    Route::get('activity', 'ActivityController@getActivity')->name('datatable.activity');

    Route::get('company', 'CompanyController@getCompany')->name('datatable.company');

    Route::get('usercompany', 'BusinessUserController@getUserCompany')->name('datatable.usercompany');

    Route::get('usersystem', 'UserController@getUserSystem')->name('datatable.usersystem');

//Route para eliminar un registro por ajax

    Route::get('destroyconsultant', 'ConsultantController@destroyConsultant');

    Route::get('destroyactivity', 'RegisterActivityController@destroyRegActivity');

    Route::get('destroyactivities', 'ActivityController@destroyActivity');

    Route::get('destroycompany', 'CompanyController@destroyCompany');

    Route::get('destroyusercompany', 'BusinessUserController@destroyUserCompany');

    Route::get('destroyusersystem', 'UserController@destroyUserSystem');
    
//Route peticiones ajax para mostrar detalle de actividad recibiendo variables idcompany y fechaActividad
    
    Route::get('showactivity/{codActivity}', 'RegisterActivityController@showActivity');

    //Route para cargar select dependiente
    Route::get('listuser', 'RegisterActivityController@listUser');

    //Route para guardar actividad usuario
    Route::get('saveactivity', 'RegisterActivityController@saveActivity');

    //Route para obtener listado de usuario y actividades de fecha y company_id
    Route::get('getactivityuser', 'RegisterActivityController@getActivityUser');

    //Route para obtener listado de usuario y actividades de fecha y company_id
    Route::get('deleteactivity', 'RegisterActivityController@deleteActivity');

    //Route de prueba para enviar email
    Route::get('sendmail/{codActivity}', 'RegisterActivityController@sendMail');

    Route::get('pdf/{register}', 'PDFcontroller@crearInformeTodosUsuarios');
    
});