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

Route::group(['middleware' => 'guest'], function() {
	
	Route::get('/', 'PagesController@index');

	Route::get('thankyou', 'PagesController@thankyou');
	
	Route::get('enquiry', 'FormsController@enquiry');
	Route::post('vendor', 'FormsController@vendor');

	// Password Reset
	Route::get('password/reset/{code}','PasswordController@getReset');
	Route::post('password/reset/{code}','PasswordController@postReset');
	Route::get('password/reset','PasswordController@getRequest');
	Route::post('password/reset','PasswordController@postRequest');

});

Route::group(['middleware' => 'user'], function() {
	
});