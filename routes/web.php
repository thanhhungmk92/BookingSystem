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

Route::namespace('Admin')->prefix('admin')->group(function(){	
	Route::get('/',[
		'uses'	=> 'IndexController@index',
		'as'	=>	'admin.index.index'
	]);	
	Route::prefix('faculty')->group(function(){
		Route::get('/',[
			'uses'	=> 'FacultyController@index',
			'as'	=>	'admin.faculty.index'
		]);
		Route::get('/add',[
			'uses'	=> 'FacultyController@getAdd',
			'as'	=>	'admin.faculty.add'
		]);
		Route::post('/add',[
			'uses'	=> 'FacultyController@postAdd',
			'as'	=>	'admin.faculty.add'
		]);
	});
	Route::prefix('doctor')->group(function(){
		Route::get('/',[
			'uses'	=> 'DoctorController@index',
			'as'	=>	'admin.doctor.index'
		]);
		
	});
});
