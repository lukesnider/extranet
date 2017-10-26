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
    return redirect('admin');
});
Route::middleware(['auth', 'cors'])->prefix('admin')->group(function () {

	Route::get('/', 'DashController@index')->name('dash');
	
	Route::prefix('projects')->group(function () {
		Route::get('/', 'ProjectController@index')->name('projects.index');
		Route::get('/create', 'ProjectController@create')->name('projects.create');
		Route::post('/store', 'ProjectController@store')->name('projects.store');
	});	
	
	Route::prefix('client')->group(function () { 
		Route::get('/', 'ClientController@index')->name('clients.index');
		Route::middleware(['admin'])->group(function () {
			Route::get('/create', 'ClientController@create')->name('clients.create');
			Route::get('/edit/{id}', 'ClientController@edit')->name('clients.edit');
			Route::post('/store', 'ClientController@store')->name('clients.store');
			Route::post('/update/{id}', 'ClientController@update')->name('clients.update');
			
		});

	});
});

Route::prefix('users')->group(function () { 
	Route::get('/', 'UserController@index')->name('users.index');
	Route::get('/{id}/edit', 'UserController@edit')->name('users.edit');
	Route::middleware(['admin'])->group(function () {
		Route::get('/create', 'UserController@create')->name('users.create');
		Route::post('/store', 'UserController@store')->name('users.store');
	});
	Route::post('/{id}/update', 'UserController@update')->name('users.update');
});

Auth::routes();

