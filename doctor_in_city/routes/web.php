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
// all public route
Route::get('/', 'PageController@index')->name('home');
Route::get('/divisions/{division}', 'DivisionController@index')->name('division');
Route::get('/cities/{city}', 'CityController@index')->name('city');
Route::get('/hospitals/{hospital}', 'HospitalController@index')->name('hospital');
Route::get('/doctors/{doctor}', 'DoctorController@index')->name('hospital');


/// automatic auth

Auth::routes();
