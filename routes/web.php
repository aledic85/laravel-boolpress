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

Route::resource('boolpress', 'PostController');

Route::resource('categories', 'CategoryController');

Route::resource('authors', 'AuthorController');

Route::get('form', 'SearchController@getAllCategoriesAndAuthors')->name('form-search');

Route::get('search', 'SearchController@search')->name('search-post');

Auth::routes();

Route::get('/create-new-post', 'HomeController@create')->name('create-new-post');

Route::post('/post-store', 'HomeController@store')->name('post-store');

Route::get('logout', 'LoginController@logout')->name('logout');

Route::get('contact-us', 'HomeController@contactUs')->name('contact-us');

Route::post('contact-us', 'HomeController@sendMail')->name('send-mail');
