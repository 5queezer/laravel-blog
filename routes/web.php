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

Route::group(['middleware' => ['web']], function () {
  Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
  Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
  Route::get('contact', 'PagesController@getContact');
  Route::get('about', 'PagesController@getAbout');
  Route::get('/', 'PagesController@getIndex');
  Route::resource('posts', 'PostController');

  // login and logout routes
  Auth::routes();

  // Categories
  Route::resource('categories', 'CategoryController', ['except' => ['create']]);
  Route::resource('tags', 'TagController', ['except' => ['create']]);

  Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
  Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
  Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
  Route::post('password/reset', 'Auth\ResetPasswordController@reset');

  Route::get('/home', 'HomeController@index')->name('home');
});
