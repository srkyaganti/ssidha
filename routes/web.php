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
	
	Route::post('enquiry', 'FormsController@enquiry');
	Route::post('vendor', 'FormsController@vendor');

	Route::get('login', 'LoginController@getLogin');
	Route::post('login', 'LoginController@postLogin');
	
	// Password Reset
	Route::get('password/reset/{code}','PasswordController@getReset');
	Route::post('password/reset/{code}','PasswordController@postReset');
	Route::get('password/reset','PasswordController@getRequest');
	Route::post('password/reset','PasswordController@postRequest');

});

Route::group(['middleware' => 'user'], function() {
	
	Route::get('logout', 'LoginController@logout');

	//Dashboard navigation links
	Route::get('careersform', 'DashboardController@careers');
	Route::get('enquiryform', 'DashboardController@enquiry');
	Route::get('vendorform', 'DashboardController@vendor');
	Route::get('profile', 'DashboardController@profile');

	Route::post('updatepassword', 'DashboardController@updatePassword');

	//Dashboard viewing profiles
	Route::get('viewcareer/{email}', 'DashboardController@viewCareer');
	Route::get('viewenquiry/{email}', 'DashboardController@viewEnquiry');
	Route::get('viewvendor/{email}', 'DashboardController@viewVendor');
});