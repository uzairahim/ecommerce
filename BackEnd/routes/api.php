<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::post('/upload-carousel','Carousel\CarouselController@uploadCarouselImages');

Route::get('/carousel-images','Carousel\CarouselController@getCarouselImages');


Route::post('/upload-product','Product\ProductController@uploadProductImages');

Route::get('/products','Product\ProductController@getProductImages');

Route::post('/sendresetpasswordemail', 'User\UserController@sendResetPasswordEmail');

Route::post('/tokenverification', 'User\UserController@tokenVerification');

Route::post('/change_password', 'User\UserController@changePassword');

Route::post('/add/user', 'User\UserController@addUser');

Route::namespace('User')->group(function(){
    Route::post('/login', 'UserController@login');
    Route::post('/logout', 'UserController@logout');
});


