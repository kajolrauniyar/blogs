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
Route::group(['middleware'=>['web']], function(){
	Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'Blogcontroller@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('blog',['uses'=>'BlogController@getIndex','as'=>'blog.index']);
	Route::get('/welcome', 'Pagescontroller@getWelcome')->name('all.posts');
	Route::get('/about', 'Pagescontroller@getAbout');
	Route::get('/contact', 'Pagescontroller@getContact');
	Route::resource('posts','PostController');


});


