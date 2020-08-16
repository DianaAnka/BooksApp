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

Auth::routes();

    
Route::get('/','BooksController@index')->name('books.index');
Route::get('/books/{book}','BooksController@show')->name('books.show');
Route::post('/rate','BooksController@rate');
Route::post('/import','CsvController@csv_import');
Route::get('/imp','CsvController@imp');
Route::get('/profile','BooksController@profile')->name('books.profile');
