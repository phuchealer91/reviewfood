<?php

//Route::group(['prefix'=>'api-admin'],function (){
////    Route::get('/','AdminCategoryController@index')->name('admin.get.list.category');
////    Route::get('/create','AdminCategoryController@create')->name('admin.get.create.category');
////    Route::post('/create','AdminCategoryController@store');
//    Route::get('/', function () {
//        return view('admin.index');
//    });
//});

Route::group(['prefix' => 'api-admin','namespace' => 'Admin'], function() {
//    Route::get('/', function () {
//        return view('admin.index');
//    });
    Route::get('/','AdminController@index')->name('api-admin.index');
    Route::group(['prefix'=>'category'],function (){
        Route::get('/','AdminCategoryController@index')->name('admin.index.category');
        Route::get('/create','AdminCategoryController@create')->name('admin.create.category');
        Route::post('/create','AdminCategoryController@store');
        Route::get('/update/{id}','AdminCategoryController@edit')->name('admin.update.category');
        Route::post('/update/{id}','AdminCategoryController@update');
        Route::get('/{action}/{id}','AdminCategoryController@delete')->name('admin.delete.category');
    });
    Route::group(['prefix'=>'product'],function (){
        Route::get('/','AdminProductController@index')->name('admin.index.product');
        Route::get('/create','AdminProductController@create')->name('admin.create.product');
        Route::post('/create','AdminProductController@store');
        Route::get('/update/{id}','AdminProductController@edit')->name('admin.update.product');
        Route::post('/update/{id}','AdminProductController@update');
        Route::get('/{action}/{id}','AdminProductController@delete')->name('admin.delete.product');
    });
    Route::group(['prefix'=>'store'],function (){
        Route::get('/','AdminStoreController@index')->name('admin.index.store');
        Route::get('/create','AdminStoreController@create')->name('admin.create.store');
        Route::post('/create','AdminStoreController@store');
        Route::get('/update/{id}','AdminStoreController@edit')->name('admin.update.store');
        Route::post('/update/{id}','AdminStoreController@update');
        Route::get('/{action}/{id}','AdminStoreController@delete')->name('admin.delete.store');
    });
    Route::group(['prefix'=>'area'],function (){
        Route::get('/','AdminAreaController@index')->name('admin.index.area');
        Route::get('/create','AdminAreaController@create')->name('admin.create.area');
        Route::post('/create','AdminAreaController@store');
        Route::get('/update/{id}','AdminAreaController@edit')->name('admin.update.area');
        Route::post('/update/{id}','AdminAreaController@update');
        Route::get('/{action}/{id}','AdminAreaController@delete')->name('admin.delete.area');
    });
    Route::group(['prefix'=>'typeCook'],function (){
        Route::get('/','AdminTypeCookController@index')->name('admin.index.typeCook');
        Route::get('/create','AdminTypeCookController@create')->name('admin.create.typeCook');
        Route::post('/create','AdminTypeCookController@store');
        Route::get('/update/{id}','AdminTypeCookController@edit')->name('admin.update.typeCook');
        Route::post('/update/{id}','AdminTypeCookController@update');
        Route::get('/{action}/{id}','AdminTypeCookController@delete')->name('admin.delete.typeCook');
    });
    Route::group(['prefix'=>'typeProduct'],function (){
        Route::get('/','AdminTypeProductController@index')->name('admin.index.typeProduct');
        Route::get('/create','AdminTypeProductController@create')->name('admin.create.typeProduct');
        Route::post('/create','AdminTypeProductController@store');
        Route::get('/update/{id}','AdminTypeProductController@edit')->name('admin.update.typeProduct');
        Route::post('/update/{id}','AdminTypeProductController@update');
        Route::get('/{action}/{id}','AdminTypeProductController@delete')->name('admin.delete.typeProduct');
    });
    Route::group(['prefix'=>'typeQuality'],function (){
        Route::get('/','AdminTypeQualityController@index')->name('admin.index.typeQuality');
        Route::get('/create','AdminTypeQualityController@create')->name('admin.create.typeQuality');
        Route::post('/create','AdminTypeQualityController@store');
        Route::get('/update/{id}','AdminTypeQualityController@edit')->name('admin.update.typeQuality');
        Route::post('/update/{id}','AdminTypeQualityController@update');
        Route::get('/{action}/{id}','AdminTypeQualityController@delete')->name('admin.delete.typeQuality');
    });
});
