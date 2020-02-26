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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/forge', function () {
    return 'Working fine';
});


Route::middleware(['auth'])->group(function (){


    Route::get('goldprice', 'GoldpriceController@index')->name('goldprice.index');
    Route::get('goldprice/{goldprice}', 'GoldpriceController@show')->name('goldprice.show');
    Route::get('goldprice/{goldprice}/edit', 'GoldpriceController@edit');
    Route::patch('goldprice/{goldprice}', 'GoldpriceController@update')->name('goldprice.update');


    Route::get('uploads/updateOrder', 'ImageUploadController@updateOrder');

    Route::get('uploads', 'ImageUploadController@index')->name('uploads.index');

    Route::post('uploads/storeNewImage', 'ImageUploadController@storeNewImage')->name('uploads.storeNewImage');
    Route::get('uploads/create', 'ImageUploadController@create')->name('uploads.create');
    Route::get('uploads/home', 'ImageUploadController@home')->name('uploads.home');


    Route::get('uploads/{upload}/destroy', 'ImageUploadController@destroy')->name('uploads.delete');
    Route::patch('uploads/{upload}', 'ImageUploadController@updateStatusHidden')->name('uploads.updateStatusHidden');
    Route::get('uploads/{upload}', 'ImageUploadController@updateStatusHidden')->name('uploads.updateStatusHidden');

    Route::get('uploads/{upload}', 'ImageUploadController@updateStatusVisible')->name('uploads.updateStatusVisible');


});
