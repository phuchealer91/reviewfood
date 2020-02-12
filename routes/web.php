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


Route::group(['namespace'=>'Frontend'],function (){
   Route::get('/','HomeController@index')->name('get.home');
   Route::get('danh-muc/{slug}-{id}','CategoryController@getListProduct')->name('get.list.product');
});

include 'route_admin.php';


