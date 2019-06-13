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

Route::get('/','BodyController@index');

Route::get('body','BodyController@index');


Route::get('cal', 'CalController@index');
Route::post('cal', 'CalController@cal');

Route::get('cal/cal_show', 'CalController@show');

Route::get('diet', 'DietController@index');
Route::post('diet', 'DietController@diet');

Route::get('diet/diet_show', 'DietController@show');

Route::get('bulk', 'BulkController@index');
Route::post('bulk', 'BulkController@bulk');

Route::get('bulk/bulk_show','BulkController@show');
