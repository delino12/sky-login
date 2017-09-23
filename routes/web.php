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

//Route::get('/', 'pagesController@welcome');
Route::get('/', function (){
	return view ('welcome');
});

/*
* Signup Functionality
*/
Route::get('/register', 'pagesController@signup');
Route::post('/post-signup', 'pagesController@add');

/*
* Login Functionality
*/
Route::get('/login', 'pagesController@login'); // get the login form
Route::post('/post-signin', 'loginController@authenticate'); // get the post from login link