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



Route::get('/project', 'ProjectController@project');
Route::get('/team', 'TeamController@team');
Route::get('/task', 'TaskController@task');



Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/charts', 'HomeController@charts')->name('charts');
Route::post('/image','HomeController@Image');
Route::get('/image','HomeController@Image');
Route::get('/user', function(){
    return view('user');
})->name('user');

Auth::routes();
