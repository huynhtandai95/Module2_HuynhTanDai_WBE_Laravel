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

    Route::get('/', 'PageController@index')->name('index');



Route::group(['prefix' => 'service'],function () {
    Route::get('/', 'ServicesController@listServices')->name('service');
    Route::get('/villa', 'ServicesController@listVilla')->name('listVilla');
    Route::get('/house', 'ServicesController@listHouse')->name('listHouse');
    Route::get('/room', 'ServicesController@listRoom')->name('listRoom');
    Route::get('/deltails/{id}','ServicesController@showServicesById')->name('ServiceDetails');
    Route::get('/order/{id}','ServicesController@order')->name('orderService')->middleware('auth');
    Route::post('/order/{id}','ServicesController@store_Order')->name('storeOrder')->middleware('auth');
    Route::get('/search','ServicesController@searchByPrice')->name('searchService');
    Route::get('/addToList/{id}','ServicesController@addToList')->name('addToList');
    Route::get('/viewList','ServicesController@viewList')->name('viewList');

});
Route::group(['prefix' => 'admin','middleware'=>'adminLogin'],function () {
    Route::get('/service', 'AdminController@listServicesbyadmin')->name('listServicesbyadmin');
    Route::get('/service/search', 'AdminController@searchByPrice')->name('searchServicesbyadmin');
    Route::get('/service/villa', 'AdminController@filterVilla')->name('filterVilla');
    Route::get('/service/house', 'AdminController@filterHouse')->name('filterHouse');
    Route::get('/service/room', 'AdminController@filterRoom')->name('filterRoom');
    Route::get('/service/edit/{id}', 'AdminController@editServicesbyadmin')->name('editServices');
    Route::post('/service/edit/{id}', 'AdminController@updateServicesbyadmin')->name('updateServices');
    Route::get('/service/delete/{id}', 'AdminController@deleteServices')->name('deleteServices');
    Route::get('/service/add','AdminController@addService')->name('addService');
    Route::post('/service/add','AdminController@storeService')->name('storeService');
});

Route::get('/review','ServicesController@getReview' )->name('review')->middleware('auth');
Route::post('/review', 'ServicesController@review')->name('reviewPost');
//Route::get('/test', function () {
//    return view('review');
//})->name('test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

