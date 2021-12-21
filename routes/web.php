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



Route::get('/','App\Http\Controllers\UserController@index');
Route::get('/about','App\Http\Controllers\Controller@viewAbout');
Route::get('/admin','App\Http\Controllers\AdminController@viewAdmin');
Route::get('/admin/addbook','App\Http\Controllers\AdminController@viewAddBook');
Route::post('/admin/addbook','App\Http\Controllers\AdminController@addBook');
Route::get('/admin/editbook/{id}','App\Http\Controllers\AdminController@viewEditBook'); //id will be placed here
Route::post('/admin/updatebook/{id}','App\Http\Controllers\AdminController@updateBook');
Route::get('/admin/deletebook/{id}', 'App\Http\Controllers\AdminController@deleteBook');


Route::get('/signup', 'App\Http\Controllers\UserController@signup');
Route::post('/signup', 'App\Http\Controllers\UserController@registerUser');
Route::get('/login', 'App\Http\Controllers\UserController@login');
Route::post('/login', 'App\Http\Controllers\UserController@match');
Route::post('/forgotPassword', 'App\Http\Controllers\UserController@forgotPassword');
Route::get('/profile', 'App\Http\Controllers\UserController@viewProfile');
Route::get('/profile/editprofile/{id}', 'App\Http\Controllers\UserController@editProfile');
Route::post('/profile/updateprofile/{id}', 'App\Http\Controllers\UserController@updateProfile');
Route::get('/logout', 'App\Http\Controllers\UserController@logout');
Route::post('/profile/changepic/{user_id}', 'App\Http\Controllers\UserController@updatePicture');
Route::post('/profile/updatepassword', 'App\Http\Controllers\UserController@updatePassword');

Route::get('/books','App\Http\Controllers\BookController@viewBooks');
Route::post('/books', 'App\Http\Controllers\BookController@searchedBooks');
Route::get('/books/addtolist/{book_id}', 'App\Http\Controllers\BookController@viewAddToList');
Route::post('/books/addtolist/{book_id}', 'App\Http\Controllers\BookController@addToList');  //id will be placed here
Route::get('/books/details/{id}', 'App\Http\Controllers\BookController@viewDetails'); //id will be placed here
Route::get('/goodbookslist', 'App\Http\Controllers\BookController@viewList');
Route::get('/goodbookslist/editlist/{id}', 'App\Http\Controllers\BookController@viewEditList');
Route::post('/goodbookslist/updatelist/{id}', 'App\Http\Controllers\BookController@updateList');
Route::get('/goodbookslist/deletelist/{id}', 'App\Http\Controllers\BookController@deleteListBook');

Route::post('/books/details/newcomment/{book_id}', 'App\Http\Controllers\BookController@newComment');


Route::get('/request', 'App\Http\Controllers\BookController@xmlhttprequest');
Route::get('/ajaxrequest', 'App\Http\Controllers\UserController@xmlhttprequest1');
Route::get('/ajaxrequest1', 'App\Http\Controllers\UserController@likeQuote');
Route::get('/ajaxrequest2', 'App\Http\Controllers\UserController@deleteQuote');