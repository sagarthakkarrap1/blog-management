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

Route::get('admin/home','App\Http\Controllers\Admin\HomeController@index');

Route::resource('admin/post','App\Http\Controllers\Admin\PostController');

Route::resource('admin/user','App\Http\Controllers\Admin\UserController');

Route::resource('admin/tag','App\Http\Controllers\Admin\TagController');

Route::resource('admin/category','App\Http\Controllers\Admin\CategoryController');

Route::get('/about','App\Http\Controllers\User\AboutController@index');

Route::get('/','App\Http\Controllers\User\HomeController@index');

Route::get('/contact','App\Http\Controllers\User\ContactController@index');

Route::get('post/{post}','App\Http\Controllers\User\PostController@post')->name('post');

