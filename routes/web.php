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
Route::get( '/about', 'frontController@about')->name('about');
Route::get( '/booklist', 'frontController@booklist')->name('booklist');

Route::get('english', function () {
    session(['lang' => 'eng']);
    return back();
})->name('english');

Route::get('bangla', function () {
    session(['lang' => 'ban']);
    return back();
})->name('bangla');

Route::get('check', function () {
    $data = session()->all();
    return $data;
})->name('check');
//Dashboard

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'Dashboard\dashboardController@index')->name('admin.dashboard');

    //Reviewer
    Route::get('/add-reviewer', 'Dashboard\reviewerController@index')->name('admin.reviewer');
    Route::post('/store-reviewer', 'Dashboard\reviewerController@store')->name('store.reviewer');
    Route::get( '/edit-reviewer/{id}', 'Dashboard\reviewerController@edit')->name('edit.reviewer');
    Route::post( '/update-reviewer/{id}', 'Dashboard\reviewerController@update')->name( 'update.reviewer');
    Route::get( '/delete-reviewer/{id}', 'Dashboard\reviewerController@delete')->name( 'delete.reviewer');

    //Books
    Route::get('/add-books', 'Dashboard\booksController@index')->name( 'admin.books');
    Route::post( '/store-books', 'Dashboard\booksController@store')->name( 'store.books');

    //Review
    Route::get('/add-review', 'Dashboard\reviewController@index')->name('add.review');
    Route::post('/store-review', 'Dashboard\reviewController@store')->name( 'store.review');


});
