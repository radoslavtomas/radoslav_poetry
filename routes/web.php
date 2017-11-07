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

Route::get('/', 'PagesController@index')->name('index');
Route::get('about', 'PagesController@about')->name('about');
Route::get('books', 'PagesController@books')->name('books');
Route::get('links', 'PagesController@links')->name('links');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('book', 'PagesController@book')->name('book');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
