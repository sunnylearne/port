<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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

Route::post('/','ContactController@store')->name('store');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/contacts', 'ContactController@index')->name('contacts');
Route::get('/contact/{contact}', 'ContactController@show')->name('contact');
Route::get('contacts/{contact}/delete','ContactController@destroy')->name('delete');
