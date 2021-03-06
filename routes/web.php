<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

	Route::get('/tweets', 'TweetController@index');
	Route::post('/tweets', 'TweetController@store')->name('tweets.store');
	Route::post('/tweets/{tweet}', 'TweetController@destroy')->name('tweets.destroy');

	Route::post('/tweets/{tweet}/like', "LikesController@store")->name('like.store');
	Route::delete('/tweets/{tweet}/like', "LikesController@destroy")->name('like.destroy');

	Route::get('/explore', 'ExploreController')->name('explore');

	Route::post('/profile/{user:username}/follow', 'FollowsController@store')->name('follow');
	Route::get('/profile/{user:username}', 'ProfileController@show')->name('profile');
	Route::get('/profile/{user:username}/edit', 'ProfileController@edit')->middleware('can:edit,user');
	Route::post('/profile/{user:username}/update', 'ProfileController@update');
});
