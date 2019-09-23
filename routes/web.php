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

Route::get('/','OnsenController@index');
Route::post('/Onsens/serch','OnsenController@serch');

Route::get('/Onsens/show/{id}','OnsenController@show');
Route::get('/Onsens/type','OnsenController@type');
Route::get('/Onsens/type1','OnsenController@type1');
Route::get('/Onsens/type2','OnsenController@type2');
Route::get('/Onsens/type3','OnsenController@type3');
Route::get('/Onsens/type4','OnsenController@type4');
Route::get('/Onsens/store','OnsenController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/gets/show', 'HomeController@show');
Route::post('/gets/add', 'HomeController@add');
