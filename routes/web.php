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


Route::resource('/', 'PagesController');
Route::resource('/apply', 'ApplicationController');
Route::resource('/contact', 'ContactController');
Route::resource('/About', 'AboutController');



                    //admin routes
		Route::resource('/ebeadmin', 'adminfrontcontroller');
		Route::resource('/slide', 'slidercontroller');
		Route::resource('/blog', 'blogscontroller');
		Route::resource('/event', 'EventsController');
		Route::resource('/beststudent', 'beststudentController');
		Route::resource('/testimonial', 'testimonialController');
		Route::resource('/portfolio', 'portfolioController');
		Route::resource('/staff', 'staffController');
       Route::resource('/ababout', 'adaboutController');

?>
