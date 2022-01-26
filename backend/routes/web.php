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

Route::get('/','web\landingPageController@getRatedProductImages');

Route::view('/composition','music_horn_composition')->name('composition');
Route::get('/safety_horn','web\landingPageController@productDetails')->name('safety_horn');
