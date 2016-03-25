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
	Route::resource('hotel', 'HotelController');
	Route::resource('banner', 'bannerController');
	Route::resource('habtipo', 'HabtipoController');
	Route::resource('habtipoF', 'habtipogaleryController');

	Route::get('getEmptipos', 'EmptipoController@getEmptipos');
	Route::get('getEmpForUsers', 'empleadoController@getEmpleadosParaUsuarios');
	Route::get('getUsuarioTipos', 'UsuariotipoController@getUsuarioTipos');
	Route::get('getHoteles', 'HotelController@getHoteles');
	Route::get('getHotelesSimple', 'HotelController@getHotelesSimple');
	Route::get('getContactos', 'ContactoController@getContactos');

	
	Route::post('crearAdminHotel', 'HotelController@crearAdminHotel');
	Route::post('guardarAdminHotel', 'HotelController@guardarAdminHotel');
	Route::post('dataEditarHotel', 'HotelController@dataEditar');

	Route::post('buscarPersonal', 'PersonalController@buscar');


});
	Route::get('admin/getBanners', 'bannerController@getBanners');
	Route::get('admin/getBanners2', 'bannerController@getBanners2');

	Route::post('admin/SlidCreate', 'bannerController@sliderCreateIndex');
	Route::post('admin/AddSubHab', 'HabTipoController@HabitacionesStore');
	Route::get('admin/AddHab', 'HabtipoController@getHabitaciones');
	Route::post('admin/createhabgalery', 'habtipogaleryController@HabTipoFotoStore');
	Route::get('admin/loadhabgalery/{habtipo_id}','habtipogaleryController@getFotoHabTipo');

	Route::post('admin/AddFoto', 'GaleryController@AddGaleryPhoto');
	Route::get('admin/getGaleryPhoto', 'GaleryController@getGaleriaFotos');

	Route::get('admin/getNoticias', 'NoticiaController@getNoticias');
	Route::post('admin/NoticiaCreate', 'NoticiaController@NoticiaCreateIndex');

	Route::post('enviarmsj', 'ContactoController@NewContacto');

	Route::get('getHotelF', 'HotelController@getHotelesFooter');



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

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

