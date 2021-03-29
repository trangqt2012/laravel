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

Route::get('/', 'homeController@home');
Route::get('/catagory', 'homeController@catagory');
Route::get('/contact', 'homeController@contact');
Route::get('/single-blog', 'homeController@singleBlog');
Route::get('/login', 'userController@login');
Route::post('/login', 'userController@checkLogin');

Route::get('/admin', 'adminController@showAccount');
Route::get('/admin/user', 'adminController@showAccountUser');
Route::get('/admin/admin', 'adminController@showAccountAdmin');
