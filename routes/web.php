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

	Route::get('/login', function () {
			return 'login page';
		});
Route::group([], function(){	


	Route::get('/', function () {
	    return view('welcome');
	});



	Route::get('/update', function () {
		echo 'update';
	})->middleware('login');


	Route::get('/delete', function () {
		echo 'delete';
	})->middleware('login');

	Route::get('/user/{id}', function ($id) {
		echo '用户的id为'.$id;
	})->where('id','\d+');


	Route::get('/mnnr', function () {
		return '这是后台页面';
	})->name('admin');

	//创建URL的时候
	Route::get('/home', function () {
		return '<a href="'.route('admin').'">后台</a>';
	});

	Route::get('/404', function () {
		if(empty($_GET['id'])){
			abort(404,'not found');
		}
	});

});


//后台路由
Route::get('/user/add', 'UserController@add');

Route::post('/user/insert', 'UserController@insert');


//API接口路由
Route::get('/user/{id}', 'UserController@show')->name('user.show');

// Route::get('test', function(){
// 	echo route('user.show', ['id' => 100]);

// });

Route::get('/users', 'UserController@index')->middleware('login');

//资源控制器(一条顶七条)
Route::resource('tiezi', 'TieziController');

Route::get('/request', 'TieziController@request');

Route::get('/form', 'TieziController@form');
Route::post('/upload', 'TieziController@upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//
Route::get('/cookie', 'HomeController@set');

//闪存
Route::get('/flash', 'HomeController@flash');

Route::get('/get-flash','HomeController@getFlash');

Route::get('/user-2', 'HomeController@user');
Route::post('/user-2', 'HomeController@insert');

Route::get('response', 'HomeController@response');

Route::get('/views', 'HomeController@views');

Route::get('/page-1', 'HomeController@page1');
Route::get('/page-2', 'HomeController@page2');

Route::get('/control', 'HomeController@control');

Route::get('/select', 'DBController@select');
Route::get('/trans', 'DBController@trans');


Route::get('/join', 'DBController@join');