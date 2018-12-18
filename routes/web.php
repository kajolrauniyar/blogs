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

Route::get('/welcome', 'Pagescontroller@getWelcome');
Route::get('/about', 'Pagescontroller@getAbout');
Route::get('/contact', 'Pagescontroller@getContact');
/*Route::get('/contact', function(){
	return view('contact');
});
Route::get('/about',function(){
	return view('about');
});
*/
Route::resource('posts','PostController');



