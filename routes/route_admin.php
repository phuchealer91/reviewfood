<?php

//Route::group(['prefix'=>'api-admin'],function (){
////    Route::get('/','AdminCategoryController@index')->name('admin.get.list.category');
////    Route::get('/create','AdminCategoryController@create')->name('admin.get.create.category');
////    Route::post('/create','AdminCategoryController@store');
//    Route::get('/', function () {
//        return view('admin.index');
//    });
//});

Route::group(['prefix' => 'admin','namespace' => 'Admin'], function() {
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
});
