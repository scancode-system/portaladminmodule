<?php

Route::prefix('admin')->group(function() {

	// Base
	Route::get('/', 'BaseController@home')->name('admin.home');

	// companies
	Route::get('/companies', 'CompanyController@index')->name('admin.companies');
	Route::delete('/companies/{company}', 'CompanyController@destroy')->name('admin.companies.destroy');
	Route::get('/companies/{company}/login', 'CompanyController@login')->name('admin.companies.login');

	// Events
	Route::get('/events/{company}', 'EventController@index')->name('admin.events');
	Route::post('/events/{company}', 'EventController@store')->name('admin.events.store');
	Route::delete('/events/{company}/{event}', 'EventController@destroy')->name('admin.events.destroy');

});
