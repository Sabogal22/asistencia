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

Route::prefix('senasoft')->group(function() {
    Route::get('/index', 'SenasoftController@index');
    Route::get('/developers', 'SenasoftController@index')->name('senasoft.developers');
    Route::get('/category', 'CategoryController@index')->name('senasoft.category.index');
});
