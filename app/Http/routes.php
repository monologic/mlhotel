<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
	Route::get('/', function () {
    return view('home.index');
});


Route::group(['prefix'=> 'admin', 'middleware' => ['web', 'auth']], function(){

    Route::get('/', 'PanelController@index');

	Route::resource('emptipo', 'EmptipoController');
	Route::resource('empleado', 'empleadoController');
	Route::resource('usuariotipo', 'UsuariotipoController');
	Route::resource('usuario', 'UsuarioController');

	Route::get('getEmptipos', 'EmptipoController@getEmptipos');
	Route::get('getEmpForUsers', 'empleadoController@getEmpleadosParaUsuarios');
	Route::get('getUsuarioTipos', 'UsuariotipoController@getUsuarioTipos');

});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

