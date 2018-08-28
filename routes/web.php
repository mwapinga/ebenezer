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

// Route::resource('/', 'Homecontroller');

Route::resource('/', 'PagesController');
Route::resource('/apply', 'ApplicationController');
Route::resource('/contact', 'ContactController');
Route::resource('/About', 'AboutController');
?>
