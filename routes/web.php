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

Route::get('/', function(){
    return view('welcome');
})->name('home');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/charts', 'HomeController@charts')->name('charts');
Route::get('/user', function(){
    return view('user');
})->name('user');
Route::post('/image','HomeController@Image');
Route::get('/image','HomeController@Image');
Auth::routes();
