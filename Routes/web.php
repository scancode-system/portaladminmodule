<?php

Route::prefix('admin')->group(function() {

	// Base
	Route::get('/', 'BaseController@home')->name('admin.home');

	// companies
	Route::get('/companies', 'CompanyController@index')->name('admin.companies');
	Route::put('/companies/{company}', 'CompanyController@update')->name('admin.companies.update');
	Route::delete('/companies/{company}', 'CompanyController@destroy')->name('admin.companies.destroy');
	Route::get('/companies/{company}/login', 'CompanyController@login')->name('admin.companies.login');

	// Events
	Route::get('/events/{company}', 'EventController@index')->name('admin.events');
	Route::get('/events/{company}/{event}', 'EventController@edit')->name('admin.events.edit');

	Route::put('/events/{event}/update/validations', 'EventController@updateValidations')->name('admin.events.update.validations');
	Route::put('/events/{event}/update/appends', 'EventController@updateAppends')->name('admin.events.update.appends');
	Route::put('/events/{event}/update/settings', 'EventController@updateSettings')->name('admin.events.update.settings');

	Route::post('/events/{company}', 'EventController@store')->name('admin.events.store');
	
	Route::delete('/events/{company}/{event}', 'EventController@destroy')->name('admin.events.destroy');


	//Email
	Route::get('/email/{company}/{event}', 'EmailController@import')->name('email.import');


	// Faq Topics
	Route::get('/faq_topics', 'FaqTopicController@index')->name('admin.faq_topics');
	Route::get('/faq_topics/create', 'FaqTopicController@create')->name('admin.faq_topics.create');
	Route::get('/faq_topics/{faq_topic}/edit', 'FaqTopicController@edit')->name('admin.faq_topics.edit');
	Route::post('/faq_topics', 'FaqTopicController@store')->name('admin.faq_topics.store');
	Route::put('/faq_topics/{faq_topic}/update', 'FaqTopicController@update')->name('admin.faq_topics.update');
	Route::delete('/faq_topics/{faq_topic}/destroy', 'FaqTopicController@destroy')->name('admin.faq_topics.destroy');

	// Faq Items
	Route::get('/faq_items/{faq_topic}', 'FaqItemController@index')->name('admin.faq_items');
	Route::get('/faq_items/{faq_topic}/create', 'FaqItemController@create')->name('admin.faq_items.create');
	Route::get('/faq_items/{faq_item}/edit', 'FaqItemController@edit')->name('admin.faq_items.edit');
	Route::post('/faq_items/{faq_topic}', 'FaqItemController@store')->name('admin.faq_items.store');
	Route::put('/faq_items/{faq_item}', 'FaqItemController@update')->name('admin.faq_items.update');
	Route::delete('/faq_items/{faq_item}/destroy', 'FaqItemController@destroy')->name('admin.faq_items.destroy');
});
