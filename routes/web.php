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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {
  
    Route::get('/dashboard','Admin\FrontendController@index');
     Route::get('items','Admin\ItemsController@index');
     Route::get('add-item','Admin\ItemsController@add');
     Route::post('insert-item','Admin\ItemsController@insert');
     Route::get('/generate-invoice', 'PDFController@index');
     Route::post('add-discount/{id}','Admin\ItemsController@update');
    
});
