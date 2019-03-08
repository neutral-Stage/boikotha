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



Auth::routes();

Route::get('/', 'frontController@index')->name('home');
Route::get( '/reviewer', 'frontController@reviewer')->name('reviewer');

//Dashboard

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'Dashboard\dashboardController@index')->name('admin.dashboard');

    //Reviewer
    Route::get('/add-reviewer', 'Dashboard\reviewerController@index')->name('admin.reviewer');
    Route::post('/store-reviewer', 'Dashboard\reviewerController@store')->name('store.reviewer');

});