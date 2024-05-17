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
    return view('/login');
});
Route::post('/login', 'App\Http\Controllers\LoginController@login_act')->name('login');

Route::get('/admin', 'App\Http\Controllers\adminController@admin')->name('admin');
Route::get('/admin/user', 'App\Http\Controllers\adminController@user')->name('show_user');
Route::post('/admin/user/add_user', 'App\Http\Controllers\adminController@add_user')->name('add_user');

