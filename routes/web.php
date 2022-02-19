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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'GuestController@home')->name('home');
Route::get('/postcard/create', 'GuestController@createPostcard') ->name('postcardcreate');
Route::post('/postcard/store', 'GuestController@storePostcard') ->name('postcard.store');

//----------------------------------

Route::get('/api/postcards/list', 'ApiController@getPostcards')->name('api.postcards.list');
