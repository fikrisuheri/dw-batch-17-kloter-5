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

Route::get('/','VideoController@index');
Route::get('/video/add','VideoController@add')->name('video.add');
Route::get('/video/detail/{id}','VideoController@detail')->name('video.detail');
Route::get('/video/edit/{id}','VideoController@edit')->name('video.edit');
Route::get('/video/delete/{id}','VideoController@delete')->name('video.delete');
Route::post('/video/store','VideoController@store')->name('video.store');
Route::post('/video/update','VideoController@update')->name('video.update');
Route::get('/category','CategoryController@index')->name('category');
Route::get('/category/add','CategoryController@add')->name('category.add');
Route::post('/category/store','CategoryController@store')->name('category.store');
Route::post('/category/update','CategoryController@update')->name('category.update');
Route::get('/category/delete/{id}','CategoryController@delete')->name('category.delete');
Route::get('/category/edit/{id}','CategoryController@edit')->name('category.edit');