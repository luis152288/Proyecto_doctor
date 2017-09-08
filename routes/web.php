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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::resource('/carousel', 'CarouselController')->name([
	'index'->'carousel',
	'create' => 'carousel.create',
    'store' => 'carousel.store',
    'show' => 'carousel.show',
    'edit' => 'carousel.edit',
    'update' => 'carousel.update',
    'destroy' => 'carousel.destroy',
	]);*/
