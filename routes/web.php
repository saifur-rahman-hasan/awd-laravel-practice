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

Route::view('/', 'welcome');

// About page
Route::get('/about', 'AboutController@showAboutPage')->name('page-about');

// Help Page
Route::get('/help', 'HelpController@showHelpPage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Profile Page
Route::get('profile', 'ProfileController@showProfile');