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
//   Route::get('danh-muc/{slug}-{id}','CategoryController@getListProduct')->name('get.list.product');
//    Route::get('/','typeProductController@getTypeProduct')->name('get.type.Product');
    Route::get('san-pham/{slug}-{id}', 'StoreDetailController@getDetailStore')->name('get.detail.store');
//    Route::get('store/get_by_product_type', 'typeProductController@getStoreByTypeId')->name('get.list.store_by_id');

});

include 'route_admin.php';


