<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// PUEDEN SER GET, POST, PUT, DELETE

Route::get('/', function () {
    return view('welcome');
});
/* EJEMPLO	
Route::get('/articles/{nombre}', function($nombre){
	echo "Esta es el nombre que colocaste: " . $nombre;
});
****PARA NOMBRAR RUTAS
Route::get('articles', [
	'as' => 'articles'
]);

***GRUPO DE RUTAS


Route::group(['prefix' => 'articles'], function(){

	Route::get('view/{article?}', function($article = "vacio"){

		echo $article;
	});

});

*/
	//RUTAS DEL FRONTEND

	Route::get('/',[
		'uses' => 'FrontController@index',
		'as' => 'front.index'
	]);

	// RUTAS DE ADMINISTRADOR

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::get('/',['as' => 'admin.index', function (){

		return view('admin.index');
	}]);

	Route::resource('users', 'UsersController');
	Route::get('users{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as'   => 'admin.users.destroy'
	]);
	
	Route::resource('categories','CategoriesController');
	Route::get('categories{id}/destroy', [
		'uses' => 'CategoriesController@destroy',
		'as'   => 'admin.categories.destroy'
	]);

	Route::resource('tags','TagsController');
	Route::get('tags{id}/destroy', [
		'uses' => 'TagsController@destroy',
		'as'   => 'admin.tags.destroy'
	]);

	Route::resource('articles','ArticlesController');
	Route::get('articles{id}/destroy', [
		'uses' => 'ArticlesController@destroy',
		'as'   => 'admin.articles.destroy'
	]);

	Route::get('images', [
		'uses'		=>	'ImagesController@index',
		'as'		=>  'admin.images.index'
		]);




});

Route::get('admin/auth/login', [
	'uses'		=> 'Auth\AuthController@getLogin',
	'as'		=> 'admin.auth.login'

	]);

Route::post('admin/auth/login', [
	'uses'		=> 'Auth\AuthController@postLogin',
	'as'		=> 'admin.auth.login'

	]);

Route::get('admin/auth/logout', [
	'uses'		=> 'Auth\AuthController@getLogout',
	'as'		=> 'admin.auth.logout'

	]);

