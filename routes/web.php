<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'PagesController@index')->name('index');
Route::get('about', 'PagesController@about')->name('about');
Route::get('books', 'PagesController@books')->name('books');
Route::get('books/{slug}', 'PagesController@book')->name('book.single');
Route::get('links', 'PagesController@links')->name('links');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::post('contact', 'PagesController@postContact')->name('postContact');

Route::get('language/{lang}', 'PagesController@setLanguage');

// Disabling this shortcut as I want to disable new registrations
//Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::middleware('auth')->prefix('admin')->group(function() {
	Route::get('dashboard', 'AdminController@getDashboard')->name('getDashboard');

	Route::get('profile', 'AdminController@getProfile')->name('getProfile');
	Route::post('profile', 'AdminController@postProfile')->name('postProfile');

	Route::get('backgrounds', 'AdminController@getBackgrounds')->name('getBackgrounds');
	Route::post('backgrounds', 'AdminController@postBackgrounds')->name('postBackgrounds');

	Route::get('links', 'AdminController@getLinks')->name('getLinks');
	Route::post('links', 'AdminController@postLinks')->name('postLinks');

	Route::get('books', 'AdminController@getBooks')->name('getBooks');
	Route::get('book/add', 'AdminController@addBook')->name('addBook');
	Route::post('book/add', 'AdminController@postBookCreate')->name('book.create');
	Route::get('book/{id}', 'AdminController@getBook')->name('getBook');
	Route::put('book/{id}', 'AdminController@putBookUpdate')->name('book.update');
	Route::delete('book/{id}', 'AdminController@deleteBook')->name('book.delete');
});
